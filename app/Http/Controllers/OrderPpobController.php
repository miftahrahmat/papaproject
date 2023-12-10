<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Layanan;
use App\Models\Pembelian;
use App\Models\Pembayaran;
use App\Models\Payment;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\digiFlazzController;
use App\Http\Controllers\ApiGamesController;
use Illuminate\Support\Str;

class OrderPpobController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index()
    {
        $payment = Payment::all();
        return view('main.order-ppob', ['pay' => $payment]);
    }

    public function cek_layanan(Request $request){
        
        $jenisNomor = '';
        $link2      =    substr($request->target, 0, 4);

        if (($link2 == '0811') or ($link2 == '0812') or ($link2 == '0813') or ($link2 == '0821') or ($link2 == '0822') or ($link2 == '0823') or ($link2 == '0851') or ($link2 == '0852') or ($link2 == '0853')) {
            $jenisNomor = 'TELKOMSEL';
        } else if (($link2 == '0817') or ($link2 == '0818') or ($link2 == '0819') or ($link2 == '0859') or ($link2 == '0877') or ($link2 == '0878')) {
            $jenisNomor = 'XL';
        } else if (($link2 == '0896') or ($link2 == '0897') or ($link2 == '0898') or ($link2 == '0899') or ($link2 == '0895')) {
            $jenisNomor = 'TRI';
        } else if (($link2 == '0881') or ($link2 == '0882') or ($link2 == '0883') or ($link2 == '0884') or ($link2 == '0885') or ($link2 == '0886') or ($link2 == '0887') or ($link2 == '0888') or ($link2 == '0889') or ($link2 == '0895') or ($link2 == '0896') or ($link2 == '0897') or ($link2 == '0898') or ($link2 == '0899')) {
            $jenisNomor = 'SMART';
        } else if (($link2 == '0998') or ($link2 == '0999') or ($link2 == '0888') or ($link2 == '0883') or ($link2 == '0884') or ($link2 == '0885') or ($link2 == '0886') or ($link2 == '0887') or ($link2 == '0888') or ($link2 == '0889')) {
            $jenisNomor = 'BOLT';
        } else if (($link2 == '0828')) {
            $jenisNomor = 'CERIA';
        } else if (($link2 == '0838') or ($link2 == '0831') or ($link2 == '0832') or ($link2 == '0833')) {
            $jenisNomor = 'AXIS';
        } else if (($link2 == '0855') or ($link2 == '0856') or ($link2 == '0857') or ($link2 == '0858') or ($link2 == '0814') or ($link2 == '0815') or ($link2 == '0816')) {
            $jenisNomor = 'INDOSAT';
        } else {
            $jenisNomor = "tidak ada";
        }
            $kategoris = Kategori::where('nama', $jenisNomor)->first();
            //$img = url('/assets/'.$kategoris->thumbnail);
            $datas = Kategori::join('layanans', 'kategoris.id', 'layanans.kategori_id')->where([['kategoris.nama', $jenisNomor], ['layanans.status', 'available']])
                ->select('layanans.id', 'layanans.brand', 'layanans.layanan', 'layanans.harga_guest', 'layanans.status')
                ->groupBy('layanans.id')->get();
                if ($datas == "[]") return response()->json(['status' => false]);
                
        return response()->json([
            'status' => true,
            'datas' => $datas,
            'target' => $request->target,
        ]); 
    }

    public function detail(Request $request){
        $request->validate([
            'target' => 'required|numeric',
            'layanan' => 'required|numeric',
        ]);
        
        if (Auth::check()) {
            if (Auth::user()->role == "Admin") {
                $data = Layanan::where('id', $request->layanan)->select('harga_gold AS harga', 'layanan', 'brand')->first();
            } elseif (Auth::user()->role == "Member") {
                $data = Layanan::where('id', $request->layanan)->select('harga_member AS harga', 'layanan', 'brand')->first();
            } elseif (Auth::user()->role == "Gold") {
                $data = Layanan::where('id', $request->layanan)->select('harga_gold AS harga', 'layanan', 'brand')->first();
            }
        }else{
                $data = Layanan::where('id', $request->layanan)->select('harga_guest as harga', 'layanan', 'brand')->first();
        }

        return response()->json([
            'status' => true,
            'target' => ": ".$request->target,
            'brand' => ": ".$data->brand,
            'produk' => ": ".$data->layanan,
            'harga' => ": Rp".number_format($data->harga,0,',','.')
        ]); 
    }

    public function order(Request $request){
        $request->validate([
            'target' => 'required|numeric',
            'layanan' => 'required|numeric',
            'pembayaran' => 'required',
        ]);

        if (Auth::check()) {
            if (Auth::user()->role == "Admin") {
                $dataLayanan = Layanan::where('id', $request->layanan)->select('layanan','kategori_id','harga_modal', 'harga_gold AS harga','provider_id', 'provider')->first();
            } elseif (Auth::user()->role == "Member") {
                $dataLayanan = Layanan::where('id', $request->layanan)->select('layanan','kategori_id','harga_modal', 'harga_member AS harga','provider_id', 'provider')->first();
            } elseif (Auth::user()->role == "Gold") {
                $dataLayanan = Layanan::where('id', $request->layanan)->select('layanan','kategori_id','harga_modal', 'harga_gold AS harga','provider_id', 'provider')->first();
            }
        }else{
            $dataLayanan = Layanan::where('id', $request->layanan)->select('layanan','harga_modal', 'harga_guest AS harga','kategori_id','provider_id', 'provider')->first();
        }

        $cekate = Kategori::where('id', $dataLayanan->kategori_id)->first();
        $cekpay = Payment::where('code', $request->pembayaran)->first();

        $kode_unik = substr(str_shuffle(1234567890),0,12);
        $order_id = 'PAPAOFFI'.$kode_unik.'INV';

        $rand = rand(123,999);
        $randqris = $dataLayanan->harga * 1 / 100;
        $modal = $dataLayanan->harga_modal;
        $no_pembayaran = '';
        $amount = '';
        $reference = '';
        
        if($request->pembayaran == "saldo"){
            $amount = $dataLayanan->harga;
            
        }else if($request->pembayaran == "OVO" || $request->pembayaran == "GOPAY" || $request->pembayaran == "DANA" || $request->pembayaran == "BCA" || $request->pembayaran == "MANDIRI" || $request->pembayaran == "QRIS")
        {
            $amount = $dataLayanan->harga + $rand;
            
            if($request->pembayaran == "OVO"){
                
                $no_pembayaran = $cekpay->nomor;
                
            }elseif($request->pembayaran == "GOPAY"){
                
                $no_pembayaran = $cekpay->nomor;
                
            }
        }

        if($request->pembayaran != "saldo"){

            $pembelian = new Pembelian();
            $pembelian->order_id = $order_id;
            $pembelian->email = $request->email;
            $pembelian->user_id = $request->target;
            $pembelian->layanan = $dataLayanan->layanan;
            $pembelian->harga = $amount;
            $pembelian->harga_modal = $modal;
            $pembelian->margin = $amount - $modal;
            $pembelian->status = 'Pending';
            $pembelian->tipe_transaksi = $cekate->tipe;
            $pembelian->save();
    
            $pembayaran = new Pembayaran();
            $pembayaran->order_id = $order_id;
            $pembayaran->harga = $amount;
            $pembayaran->no_pembayaran = $no_pembayaran;
            $pembayaran->no_pembeli = $request->phone;
            $pembayaran->status = 'Belum Lunas';
            $pembayaran->metode = $request->pembayaran;
            $pembayaran->reference = $reference;
            $pembayaran->save();
            
            
        }

        return response()->json([
            'status' => true,
            'order_id' => $order_id
        ]);
    }
}