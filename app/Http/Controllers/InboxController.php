<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Inbox;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

class InboxController extends Controller
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

    public function index(Request $request)
    {
        $user = Auth::user();
        $datatransaksis = Inbox::where([['from_id', $user->id], ['type', 'Transaksi']])->orderBy('created_at', 'desc')->paginate(10);
        $datamutasis = Inbox::where([['from_id', $user->id], ['type', '!=', 'Transaksi']])->orderBy('created_at', 'desc')->paginate(10);
        $datasemuas = Inbox::where([['from_id', $user->id]])->orderBy('created_at', 'desc')->paginate(10);
        $cekinbox = Inbox::where([['from_id', auth::user()->id], ['status', 0]])->count(); 

        if ($request->ajax()) {
            $all = view('data.semua', ['datasemua' => $datasemuas, 'pesan' => $cekinbox])->render();
            $mutasis = view('data.mutasi', ['datamutasi' => $datamutasis, 'pesan' => $cekinbox])->render();
            $transaksis = view('data.transaksi', ['datatransaksi' => $datatransaksis, 'pesan' => $cekinbox])->render();
  
            return response()->json(['semua' => $all, 'mutasi' => $mutasis, 'transaksi' => $transaksis]);
        }

        return view('main.inbox', ['datasemua' => $datasemuas, 'datamutasi' => $datamutasis, 'datatransaksi' => $datatransaksis, 'pesan' => $cekinbox]);
    }

    public function read(){

        $cek = Inbox::where([['from_id', auth::user()->id], ['status', '=', 0]])->update(array('status' => 1));

    }

}