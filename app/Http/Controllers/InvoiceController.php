<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Inbox;
use Carbon\Carbon;
use App\Models\Payment;
use App\Models\Pembayaran;
use App\Models\Pembelian;

class InvoiceController extends Controller
{
    public function index($oid)
    {
        $datas = Pembelian::join('pembayarans', 'pembelians.order_id', 'pembayarans.order_id')
        ->where('pembelians.order_id', $oid)
        ->select('pembelians.*', 'pembayarans.created_at as cpay', 'pembayarans.status as spay', 'pembayarans.no_pembayaran as nopay', 'pembayarans.metode as mpay', 'pembayarans.reference as rpay')->first();
        $expired = Carbon::create($datas->cpay)->addDay();
        $payments = Payment::where('name', $datas->mpay)->first();
        
        return view('main.invoice-order', ['data' => $datas, 'exp' => $expired, 'pay' => $payments]);
    }
}