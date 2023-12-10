<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Pembayaran;
use App\Models\Pembelian;
use App\Http\Controllers\digiFlazzController;
use App\Console\Commands\Ovo;
use App\Console\Commands\GojekPay;
use App\Models\Ovo as OvoModel;
use App\Models\Gojek;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class UpdateStatusTransaksi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-status-transaksi';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $tanggalsekarang = Carbon::now();
        $datapembayaran = Pembayaran::where('status', 'Belum Lunas')->get();
        if ($datapembayaran != null) {
            foreach($datapembayaran->chunk(100) as $semua)
            {
                foreach($semua as $data)
                {
                    
                    $tomorrow = Carbon::parse($data->created_at)->addHour(3);
                    $pembelian = Pembelian::where('order_id', $data->order_id)->select('email', 'user_id', 'zone', 'layanan', 'tipe_transaksi', 'nickname')->first();
                    $pembayaran = Pembayaran::where('order_id', $data->order_id)->select('harga','order_id','no_pembeli', 'metode')->first();
                    $layanan = Layanan::where('layanan', $pembelian->layanan)->select('provider_id', 'tipe', 'kategori_id', 'provider')->first();
                    $kategori = Kategori::where('id', $layanan->kategori_id)->first();
                    
                    try{
                    
                        if($pembelian->tipe_transaksi == "game"){
                            $layanan = LayananGame::where('layanan', $pembelian->layanan)->select('provider_id', 'kategori_id', 'provider')->first();
                            $kategori = KategoriGame::where('id', $layanan->kategori_id)->first();
                        }else if($pembelian->tipe_transaksi == "ppob"){
                            $layanan = LayananPpob::where('layanan', $pembelian->layanan)->select('provider_id', 'tipe', 'kategori_id')->first();   
                            $kategori = Kategori::where('id', $layanan->kategori_id)->first();
                        }
    
                    }catch(\Exception $e){
                        continue;
                    }
                    $nickname = $pembelian->nickname == null ? '' : "Nickname : $pembelian->nickname";
                    $zone = $data->zone == null ? "" : "($data->zone)\n";
                }
            }
        }
    }
    
}