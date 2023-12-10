<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\KategoriGame;
use App\Models\LayananGame;
use App\Models\Pembelian;
use App\Models\Inbox;

class HomeController extends Controller
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
        return view('main.index', ['pesan' => $cekinbox]);
    }
}
