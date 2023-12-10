<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Deposit;
use App\Models\Upgrade;
use App\Models\Inbox;
use Carbon\Carbon;
use App\Models\Payment;
use App\Models\Pembayaran;
use App\Models\Pembelian;

class ProfilController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //buat yang udah login
        $user = Auth::user();
        $cekinbox = Inbox::where([['from_id', $user->id], ['status', 0]])->count();
        return view('main.profil', ['pesan' => $cekinbox, 'data' => $user]);
    }

    public function edit()
    {
        $user = Auth::user();
        $cekinbox = Inbox::where([['from_id', $user->id], ['status', 0]])->count();
        return view('main.edit-profil',['pesan' => $cekinbox, 'data' => $user]);
    }

    public function save_edit(Request $request)
    {
        $request->validate([
            'avatar' => 'image|mimes:jpg,png,jpeg,svg|max:100',
            'name' => 'required',
            'phone' => 'required|numeric|unique:users',
            'password' => 'nullable|min:6|max:255',
        ], [
            'phone.unique'  => 'Nomor telah digunakan',
            'phone.numeric' => 'Whatsapp harus berupa angka',
            'password.min' => 'Panjang password minimal 6 huruf',
            'password.max' => 'Panjang password maximal 255 huruf',
        ]);
        
        $data = [
          'name' =>  $request->name,
          'phone' => $request->phone,
        ];
        
        if(!empty($request->password)){
            
            $data['password'] = bcrypt($request->password);
            
        }

        if(!empty($request->avatar)){
            
               $file = $request->file('avatar');
               $name = $file->store('avatar', ['disk' => 'public']);
               
               $data['avatar'] = $name;
        }
        
        \App\Models\User::where('id', Auth()->user()->id)->update($data);
        
        return redirect()->route('akun')->with('success', 'Berhasil update profile!');
    }

    public function deposit()
    {
        $cek = Deposit::where([['email', auth::user()->email], ['status', 'Pending']])->first();
        if($cek != null){
            return redirect()->route('detail.riwayat.deposit', $cek->invoice);
        }
        $cekinbox = Inbox::where([['from_id', auth::user()->id], ['status', 0]])->count();
        return view('main.deposit', ['pesan' => $cekinbox]);
    }
    
    public function deposit_post(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'metode' => 'required',
            'pengirim' => 'required',
            'jumlah' => 'required|numeric|min:200000',
        ], [
            'email.required' => 'Harap isi kolom Email!',
            'metode.required' => 'Harap isi kolom Metode Pembayaran!',
            'pengirim.required' => 'Harap isi kolom Pengirim!',
            'jumlah.min' => 'Minimal deposit Rp200.000',
        ]);
        
        $kode_unik = substr(str_shuffle(1234567890),0,10);
        $order_id = 'PAPAOFFI'.$kode_unik.'DP';
        
        $data = [
          'invoice' => $order_id,
          'email' => $request->email,
          'metode' => $request->metode,
          'pengirim' => $request->pengirim,
          'jumlah' => $request->jumlah + rand(111,999),
        ];
        
        \App\Models\Deposit::create($data);
        
        return redirect()->route('detail.riwayat.deposit', $order_id)->with('success', 'Request Deposit Berhasil!');
    
    }
    
    public function riwayat_deposit(Request $request)
    {
        $cekinbox = Inbox::where([['from_id', auth::user()->id], ['status', 0]])->count();
        $datasukses = Deposit::where([['email', auth::user()->email], ['status', 'Sukses']])->orderBy('created_at', 'desc')->paginate(10);
        $datapending = Deposit::where([['email', auth::user()->email], ['status', 'Pending']])->orderBy('created_at', 'desc')->paginate(10);
        $databatal = Deposit::where([['email', auth::user()->email], ['status', 'Batal']])->orderBy('created_at', 'desc')->paginate(10);
        
        if ($request->ajax()) {
            $pendings = view('data.deposit-pending', ['pending' => $datapending, 'pesan' => $cekinbox])->render();
            $suksess = view('data.deposit-sukses', ['sukses' => $datasukses, 'pesan' => $cekinbox])->render();
            $batals = view('data.deposit-batal', ['batal' => $databatal, 'pesan' => $cekinbox])->render();
  
            return response()->json(['pending' => $pendings, 'sukses' => $suksess, 'batal' => $batals]);
        }

        return view('main.riwayat-deposit', ['sukses' => $datasukses, 'pending' => $datapending, 'batal' => $databatal, 'pesan' => $cekinbox]);
    }
    
    public function detail_riwayat_deposit($inv)
    {
        $datas = Deposit::where('invoice', $inv)->first();
        $expired = Carbon::create($datas->created_at)->addDay();
        $payments = Payment::where('name', $datas->metode)->first();
        if($payments->name == "GOPAY")
        {
            $nomor = "085161286087";
            $name = "LENY KARLINA";
        }elseif($payments->name == "DANA" || $payments->name == "OVO")
        {
            $nomor = "087717196514";
            $name = "MIFTAH RAHMAT";
        }elseif($payments->name == "MANDIRI")
        {
            $nomor = "1310019879404";
            $name = "MIFTAH RAHMAT";
        }

        $cekinbox = Inbox::where([['from_id', auth::user()->id], ['status', 0]])->count();
        return view('main.invoice-deposit', ['pesan' => $cekinbox, 'data' => $datas, 'exp' => $expired, 'pay' => $payments, 'no' => $nomor, 'an' => $name]);
    }

    public function riwayat_transaksi(Request $request)
    {
        $datasukses = Pembelian::join('pembayarans', 'pembelians.order_id', 'pembayarans.order_id')
        ->where([['pembelians.email', auth::user()->email], ['pembelians.status', 'Sukses']])
        ->select('pembelians.order_id', 'pembelians.layanan', 'pembelians.created_at', 'pembayarans.status as spay')->orderBy('created_at', 'desc')->paginate(10);
        $dataproses = Pembelian::join('pembayarans', 'pembelians.order_id', 'pembayarans.order_id')
        ->where([['pembelians.email', auth::user()->email], ['pembelians.status', 'Proses']])
        ->select('pembelians.order_id', 'pembelians.layanan', 'pembelians.created_at', 'pembayarans.status as spay')->orderBy('created_at', 'desc')->paginate(10);
        $databatal = Pembelian::join('pembayarans', 'pembelians.order_id', 'pembayarans.order_id')
        ->where([['pembelians.email', auth::user()->email], ['pembelians.status', 'Gagal']])
        ->select('pembelians.order_id', 'pembelians.layanan', 'pembelians.created_at', 'pembayarans.status as spay')->orderBy('created_at', 'desc')->paginate(10);
        $datapending = Pembelian::join('pembayarans', 'pembelians.order_id', 'pembayarans.order_id')
        ->where([['pembelians.email', auth::user()->email], ['pembelians.status', 'Pending']])
        ->select('pembelians.order_id', 'pembelians.layanan', 'pembelians.created_at', 'pembayarans.status as spay')->latest()->first();
        $cekinbox = Inbox::where([['from_id', auth::user()->id], ['status', 0]])->count(); 

        if ($request->ajax()) {
            $prosess = view('data.riwayat-transaksi-proses', ['proses' => $dataproses, 'pesan' => $cekinbox])->render();
            $suksess = view('data.riwayat-transaksi-sukses', ['sukses' => $datasukses, 'pesan' => $cekinbox])->render();
            $batals = view('data.riwayat-transaksi-batal', ['batal' => $databatal, 'pesan' => $cekinbox])->render();
  
            return response()->json(['proses' => $prosess, 'sukses' => $suksess, 'batal' => $batals]);
        }

        return view('main.riwayat-transaksi', ['proses' => $dataproses, 'sukses' => $datasukses, 'batal' => $databatal, 'pending' => $datapending, 'pesan' => $cekinbox]);
    
    }

    public function detail_riwayat_transaksi($oid)
    {
        $datas = Pembelian::join('pembayarans', 'pembelians.order_id', 'pembayarans.order_id')
        ->where([['pembelians.email', auth::user()->email], ['pembelians.order_id', $oid]])
        ->select('pembelians.*', 'pembayarans.created_at as cpay', 'pembayarans.status as spay', 'pembayarans.no_pembayaran as nopay', 'pembayarans.metode as mpay', 'pembayarans.reference as rpay')->first();
        $expired = Carbon::create($datas->cpay)->addDay();
        $payments = Payment::where('name', $datas->mpay)->first();
        
        if($payments->name == "GOPAY")
        {
            $nomor = "085161286087";
            $name = "LENY KARLINA";
        }elseif($payments->name == "DANA" || $payments->name == "OVO")
        {
            $nomor = "087717196514";
            $name = "MIFTAH RAHMAT";
        }elseif($payments->name == "MANDIRI")
        {
            $nomor = "1310019879404";
            $name = "MIFTAH RAHMAT";
        }elseif($payments->name == "BCA")
        {
            $nomor = "1310019879404";
            $name = "MIFTAH RAHMAT";
        }

        $cekinbox = Inbox::where([['from_id', auth::user()->id], ['status', 0]])->count();
        return view('main.invoice-transaksi', ['data' => $datas, 'exp' => $expired, 'pay' => $payments, 'no' => $nomor, 'an' => $name, 'pesan' => $cekinbox]);
    }

    public function transfer()
    {
        $cekinbox = Inbox::where([['from_id', auth::user()->id], ['status', 0]])->count();

        return view('main.transfer', ['pesan' => $cekinbox]);
    }

    public function transfer_post(Request $request)
    {
        $cek = User::where('email', Auth::user()->email)->first();
        
        $request->validate([
            'email' => 'required|email',
            'nominal' => 'required|numeric|min:15000'
        ], [
            'nominal.min' => 'Transfer minimal 15.000'
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user){
            return back()->with('error', 'Email tidak ditemukan');  
        }
        
        if($cek->saldo >= $request->nominal) {
            $updateuser = $user->update([
                'saldo'  => $user->saldo + $request->nominal
            ]);
            $cek = $cek->update([
                'saldo'  => $cek->saldo - $request->nominal
            ]);
            
            $create = Inbox::create([
                'from_id'       => auth::user()->id,
                'to_id'         => $user->id,
                'pesan'         => 'Transfer Saldo Ke '.$user->name.' Sebesar Rp'.number_format($request->nominal,0,',','.').' ',
                'type'          => 'Credit',
            ]);

            $createtwo = Inbox::create([
                'from_id'       => $user->id,
                'to_id'         => auth::user()->id,
                'pesan'        => 'Menerima Saldo Dari '.auth::user()->name.' Sebesar Rp'.number_format($request->nominal,0,',','.').' ',
                'type'          => 'Debit',
            ]);

            return redirect()->route('inbox')->with('success', 'Transfer Saldo Berhasil!');
            
        }else{
            return back()->with('error', 'Oops, Saldo tidak mencukupi');
        }
    
    }

    public function upgrade()
    {   
        $cek = Upgrade::where('user_email', auth::user()->email)->first();
        if($cek != null){
            return redirect()->route('detail.riwayat.upgrade', $cek->invoice);
        }
        $data = ['DANA', 'MANDIRI', 'OVO', 'GOPAY'];
        $payments = Payment::select('name', 'images')->whereIn('name', $data)->get();
        
        $cekinbox = Inbox::where([['from_id', auth::user()->id], ['status', 0]])->count();
        return view('main.upgrade', ['pay' => $payments, 'pesan' => $cekinbox]);
    }

    public function upgrade_cek(Request $request)
    {
        if($request->type == "plus")
        {
            $data = "199000";
        }else{
            $data = "99000";
        }
    
        return response()->json([
            'status' => true,
            'harga' => "Rp. ".number_format($data, 0, '.', ',')
        ]);
    }

    public function upgrade_post(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'method' => 'required',
        ]);
        
        $kode_unik = substr(str_shuffle(1234567890),0,8);
        $order_id = 'PAPAOFFI'.$kode_unik.'UP';

        if($request->type == "plus"){
            $jumlah = "199000";
        }else{
            $jumlah = "99000";
        }
        
        $data = [
          'invoice' => $order_id,
          'user_email' => auth::user()->email,
          'type' => $request->type,
          'metode' => $request->method,
          'jumlah' => $jumlah + rand(111,999),
        ];
        
        \App\Models\Upgrade::create($data);
        
        return redirect()->route('detail.riwayat.upgrade', $order_id)->with('success', 'Request Upgrade Berhasil!');
    }

    public function detail_riwayat_upgrade($inv)
    {
        $datas = Upgrade::where('invoice', $inv)->first();
        
        if($datas != null){
            $expired = Carbon::create($datas->created_at)->addDay();
            $payments = Payment::where('name', $datas->metode)->first();
            if($payments->name == "GOPAY")
            {
                $nomor = "085161286087";
                $name = "LENY KARLINA";
            }elseif($payments->name == "DANA" || $payments->name == "OVO")
            {
                $nomor = "087717196514";
                $name = "MIFTAH RAHMAT";
            }elseif($payments->name == "MANDIRI")
            {
                $nomor = "1310019879404";
                $name = "MIFTAH RAHMAT";
            }
        }else{
            return redirect()->route('akun');
        }

        $cekinbox = Inbox::where([['from_id', auth::user()->id], ['status', 0]])->count();
        
        return view('main.invoice-upgrade', ['data' => $datas, 'exp' => $expired, 'pay' => $payments, 'no' => $nomor, 'an' => $name, 'pesan' => $cekinbox]);
    }
}