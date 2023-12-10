<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Layanan;
use App\Models\Pembelian;
use App\Models\Inbox;
use Illuminate\Support\Str;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('verified')->only('index');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //buat guest
        $datas = Kategori::where([['status', 'active'], ['tipe', 'game']])->take(10)->get();
        $populers = Kategori::where([['populer', 'Ya'], ['tipe', 'game']])->take(4)->get();
        if(Auth::user()){
            $cekinbox = Inbox::where([['from_id', auth::user()->id], ['status', 0]])->count();   
            return view('main.index', ['pesan' => $cekinbox, 'data' => $datas, 'populer' => $populers]);
        }
        
        return view('main.index', ['data' => $datas, 'populer' => $populers]);
    }
  
    public function detail($toko, $pid)
    {
        if(Auth::user()){
            $cekinbox = Inbox::where([['from_id', auth::user()->id], ['status', 0]])->count();   
            return view('main.produk-detail', ['pesan' => $cekinbox]);
        }
        
        return view('main.produk-detail');
    }

    public function search()
    {
        return view('main.search');
    }
}
