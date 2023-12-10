<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Kategori;
use App\Models\Layanan;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\digiFlazzController;
use Illuminate\Support\Str;

class UpdateGame extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-game';

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
        $digiFlazz = new digiFlazzController;
        $res = $digiFlazz->harga();
        $rate_normal = 0.03;
        $rate_member = 0.02;
        $rate_gold = 0.002;

        foreach(Kategori::get() as $kategori){
            foreach($res['data'] as $data){
                
                if(strtoupper($data['brand']) == strtoupper($kategori->nama)){
                    if($data['category'] == "Games"){

                        $cekgame = Layanan::where('provider_id',$data['buyer_sku_code'])->first();
                        
                        if(!$cekgame){
                            $layanan = new Layanan();
                            $layanan->kategori_id = $kategori->id;
                            $layanan->brand = $data['brand'];
                            $layanan->layanan = $data['product_name'];
                            $layanan->provider_id = $data['buyer_sku_code'];
                            $layanan->provider = "digiflazz";
                            $layanan->harga_modal = $data['price'];
                            $layanan->harga_guest = $data['price'] + ($data['price'] * $rate_normal);
                            $layanan->harga_member  = $data['price'] + ($data['price'] * $rate_member);
                            $layanan->harga_gold  = $data['price'] + ($data['price'] * $rate_gold);
                            $layanan->tipe = $data['type'];
                            $layanan->status = "available";
                            $layanan->save();
                            
                        }else{

                            $cekdata->update([

                                'harga_modal' => $data['price'],
                                'harga_guest' => $data['price'] + ($data['price'] * $rate_normal_pulsa),
                                'harga_member'    => $data['price'] + ($data['price'] * $rate_reseller_pulsa),
                                'harga_gold'    => $data['price'] + ($data['price'] * $rate_gold_pulsa),
                                'status'        => ($data['seller_product_status'] === true ? "available" : "unavailable"),

                            ]);

                        }
                    }
                }
            }
        }
    }
    
}