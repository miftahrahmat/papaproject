<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Inbox;

class TopupController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $datas = Kategori::where([['status', 'active'], ['tipe', 'game']])->get();
        if(Auth::user()){
            $cekinbox = Inbox::where([['from_id', auth::user()->id], ['status', 0]])->count();   
            return view('main.topup', ['pesan' => $cekinbox, 'data' => $datas]);
        }
        
        return view('main.topup', ['data' => $datas]);
    }
}