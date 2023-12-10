<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Layanan;
use App\Models\Payment;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\digiFlazzController;
use App\Http\Controllers\ApiGamesController;

class OrderGameController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index(Kategori $kategori)
    {
        $payments = Payment::all();
        $users = Auth::user();
        $datas = Kategori::where('kode', $kategori->kode)->select('id', 'nama',  'thumbnail', 'kode', 'petunjuk')->first();
        if($datas == null) return back();

        $layanans = Layanan::where([['kategori_id', $datas->id], ['status', 'available']])->select('id', 'kategori_id', 'layanan', 'harga_guest')->orderBy('harga_guest', 'asc')->get();

        return view('main.order-games', ['data' => $datas, 'layanan' => $layanans, 'user' => $users, 'pay_method' => $payments]);
    }

    public function price(Request $request)
    {
        
        if (Auth::check()) {
            if (Auth::user()->role == "Admin") {
                $data = Layanan::where('id', $request->nominal)->select('harga_gold AS harga')->first();
            } elseif (Auth::user()->role == "Member") {
                $data = Layanan::where('id', $request->nominal)->select('harga_member AS harga')->first();
            } elseif (Auth::user()->role == "Gold") {
                $data = Layanan::where('id', $request->nominal)->select('harga_gold AS harga')->first();
            }
        }else{
            $data = Layanan::where('id', $request->nominal)->select('harga_guest AS harga')->first();
        }

        return response()->json([
            'status' => true,
            'harga' => "Rp".number_format($data->harga,0,',','.')
        ]);
    }

    public function confirm(Request $request)
    {
        $request->validate([
            'uid' => 'required',
            'service' => 'required|numeric',
            'payment_method' => 'required',
            'nomor' => 'required|numeric',
        ]);
        
        
        $ag = new ApiGamesController();
        $digiFlazz = new digiFlazzController;
        
        if (Auth::check()) {
            if (Auth::user()->role == "Admin") {
                $dataLayanan = Layanan::where('id', $request->service)->select('harga_gold AS harga', 'kategori_id', 'layanan')->first();
            } elseif (Auth::user()->role == "Member") {
                $dataLayanan = Layanan::where('id', $request->service)->select('harga_member AS harga', 'kategori_id', 'layanan')->first();
            } elseif (Auth::user()->role == "Gold") {
                $dataLayanan = Layanan::where('id', $request->service)->select('harga_gold AS harga', 'kategori_id', 'layanan')->first();
            }
        }else{
                $dataLayanan = Layanan::where('id', $request->service)->select('harga_guest as harga', 'kategori_id', 'layanan')->first();
        }

        $dataKategori = Kategori::where('id', $dataLayanan->kategori_id)->select('kode', 'nama')->first();
        $daftarGameValidasi = ['free-fire', 'mobile-legends'];

        if(in_array($dataKategori->kode, $daftarGameValidasi)){
            if ($dataKategori->kode == 'mobile-legends') {
                $data = $ag->cek($request->uid, $request->zone, 'mobilelegend');
            } else if($dataKategori->kode == "free-fire"){
                $data = $ag->cek($request->uid, null, 'freefire');
            }
            $username = "Miftah Rahmat Junior.";
            
                $sendData = "
                <div class='p-4 border-gray-100 mb-2'>
                    <div class='first-line:flex justify-items-center'>
                        <div>
                            <h2 class='font-bold mb-1'>Informasi Pesanan</h2>
                            <p class='text-sm'>Pastikan semua data sudah benar.</p>
                        </div>
                    </div>
                </div>
                
                <div class='relative transform overflow-hidden rounded-lg bg-slate-400 pt-5 pb-4 shadow-xl transition-all w-full sm:max-w-[460px] opacity-100'>
                    <div class='grid grid-cols-3 gap-2 font-bold text-sm text-left leading-relaxed rounded-md bg-slate-600 p-4'>
                        <div>Username</div>
                        <div class='cs-2'>: ".urldecode($username)."</div>
                        <div>ID Game</div>
                        <div class='cs-2'>: $request->uid $request->zone</div>
                        <div>Layanan</div>
                        <div class='cs-2'>: $dataLayanan->layanan</div>
                        <div>Harga</div>
                        <div class='cs-2'>: Rp".number_format($dataLayanan->harga,0,',','.')."</div>
                        <div>Payment</div>
                        <div class='cs-2'>: ".strtoupper($request->payment_method)."</div>
                        <div class='cs-3'>
                            <span class='mr-1 font-bold'>CATATAN!</span>
                            <span>Harga belum termasuk biaya admin.</span>
                        </div>
                    </div>
                </div>";
            
            
                        
            return response()->json([
                'status' => true,
                'data' => $sendData
            ]);
        }else{
            $sendData = "ID / TUJUAN : <span id='nick'>$request->uid </span><br>
                        Harga : Rp. ".number_format($dataLayanan->harga,0,',','.').
                        "<br>Metode Pembayaran : ".strtoupper($request->payment_method).
                        "<br><br>Catatan : Harga diatas belum termasuk biaya admin";
            
            return response()->json([
                'status' => true,
                'data' => $sendData
            ]);
        }
    }

}
