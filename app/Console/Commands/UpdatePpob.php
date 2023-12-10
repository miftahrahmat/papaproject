<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Kategori;
use App\Models\Layanan;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\digiFlazzController;
use Illuminate\Support\Str;

class UpdatePpob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-ppob';

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
        $rate_reseller = 0.02;
        $rate_gold = 0.002;
        
        $rate_normal_pulsa = 0.04;
        $rate_reseller_pulsa = 0.02;
        $rate_gold_pulsa = 0.002;

        foreach(Kategori::get() as $kategori){
            foreach($res['data'] as $data){
                if(Str::upper($data['brand']) == Str::upper($kategori->nama)){
                    if($data['category'] == "Data" && $kategori->tipe == "Data"){

                        $cekdata = Layanan::where('provider_id',$data['buyer_sku_code'])->first();
                        
                        if(!$cekdata)
                        {
                            $layanan = new Layanan();
                            $layanan->kategori_id = $kategori->id;
                            $layanan->brand = $data['brand'];
                            $layanan->layanan = $data['product_name'];
                            $layanan->provider_id = $data['buyer_sku_code'];
                            $layanan->provider = "digiflazz";
                            $layanan->harga_modal = $data['price'];
                            $layanan->harga_guest = $data['price'] + ($data['price'] * $rate_normal_pulsa);
                            $layanan->harga_member  = $data['price'] + ($data['price'] * $rate_reseller_pulsa);
                            $layanan->harga_gold  = $data['price'] + ($data['price'] * $rate_gold_pulsa);
                            $layanan->tipe = $data['type'];
                            $layanan->catatan = $data['desc'];
                            $layanan->status = "available";
                            $layanan->save();
                            
                        }else{

                            $cekdata->update([

                                'harga_modal' => $data['price'],
                                'harga_guest' => $data['price'] + ($data['price'] * $rate_normal_pulsa),
                                'harga_member'    => $data['price'] + ($data['price'] * $rate_reseller_pulsa),
                                'harga_gold'    => $data['price'] + ($data['price'] * $rate_gold_pulsa),
                                'status'        => ($data['seller_product_status'] === true ? "available" : "unavailable"),
                                'catatan'   => $data['desc'],

                            ]);

                        }


                  }else if($data['category'] == "Pulsa" && $kategori->tipe == "Pulsa"){

                    $cekpulsa = Layanan::where('provider_id',$data['buyer_sku_code'])->first();
                    
                    if(!$cekpulsa){

                        $layanan = new Layanan();
                            $layanan->kategori_id = $kategori->id;
                            $layanan->brand = $data['brand'];
                            $layanan->layanan = $data['product_name'];
                            $layanan->provider_id = $data['buyer_sku_code'];
                            $layanan->provider = "digiflazz";
                            $layanan->harga_modal = $data['price'];
                            $layanan->harga_guest = $data['price'] + ($data['price'] * $rate_normal_pulsa);
                            $layanan->harga_member  = $data['price'] + ($data['price'] * $rate_reseller_pulsa);
                            $layanan->harga_gold  = $data['price'] + ($data['price'] * $rate_gold_pulsa);
                            $layanan->tipe = $data['type'];
                            $layanan->catatan = $data['desc'];
                            $layanan->status = "available";
                            $layanan->save();
                            
                        }else{

                            $cekpulsa->update([

                                'harga_modal' => $data['price'],
                                'harga_guest' => $data['price'] + ($data['price'] * $rate_normal_pulsa),
                                'harga_member'    => $data['price'] + ($data['price'] * $rate_reseller_pulsa),
                                'harga_gold'    => $data['price'] + ($data['price'] * $rate_gold_pulsa),
                                'status'        => ($data['seller_product_status'] === true ? "available" : "unavailable"),
                                'catatan'   => $data['desc'],

                            ]);
        

                    }


                }else if($data['category'] == "E-Money" && $kategori->tipe == "E-Money"){

                    $cekemoney = Layanan::where('provider_id',$data['buyer_sku_code'])->first();

                    if(!$cekemoney){

                            $layanan = new Layanan();
                            $layanan->kategori_id = $kategori->id;
                            $layanan->brand = $data['brand'];
                            $layanan->layanan = $data['product_name'];
                            $layanan->provider_id = $data['buyer_sku_code'];
                            $layanan->provider = "digiflazz";
                            $layanan->harga_modal = $data['price'];
                            $layanan->harga_guest = $data['price'] + ($data['price'] * $rate_normal_pulsa);
                            $layanan->harga_member  = $data['price'] + ($data['price'] * $rate_reseller_pulsa);
                            $layanan->harga_gold  = $data['price'] + ($data['price'] * $rate_gold_pulsa);
                            $layanan->tipe = $data['type'];
                            $layanan->catatan = $data['desc'];
                            $layanan->status = "available";
                            $layanan->save();
                            
                        }else{

                            $cekmoney->update([

                                'harga_modal' => $data['price'],
                                'harga_guest' => $data['price'] + ($data['price'] * $rate_normal_pulsa),
                                'harga_member'    => $data['price'] + ($data['price'] * $rate_reseller_pulsa),
                                'harga_gold'    => $data['price'] + ($data['price'] * $rate_gold_pulsa),
                                'status'        => ($data['seller_product_status'] === true ? "available" : "unavailable"),
                                'catatan'   => $data['desc'],

                            ]);

                    }


                }else if($data['category'] == "PLN" && $kategori->tipe == "PLN"){

                    $cekpln = Layanan::where('provider_id',$data['buyer_sku_code'])->first();

                    if(!$cekpln){

                            $layanan = new Layanan();
                            $layanan->kategori_id = $kategori->id;
                            $layanan->brand = $data['brand'];
                            $layanan->layanan = $data['product_name'];
                            $layanan->provider_id = $data['buyer_sku_code'];
                            $layanan->provider = "digiflazz";
                            $layanan->harga_modal = $data['price'];
                            $layanan->harga_guest = $data['price'] + ($data['price'] * $rate_normal_pulsa);
                            $layanan->harga_member  = $data['price'] + ($data['price'] * $rate_reseller_pulsa);
                            $layanan->harga_gold  = $data['price'] + ($data['price'] * $rate_gold_pulsa);
                            $layanan->tipe = $data['type'];
                            $layanan->catatan = $data['desc'];
                            $layanan->status = "available";
                            $layanan->save();
                            
                        }else{

                            $cekpln->update([

                                'harga_modal' => $data['price'],
                                'harga_guest' => $data['price'] + ($data['price'] * $rate_normal_pulsa),
                                'harga_member'    => $data['price'] + ($data['price'] * $rate_reseller_pulsa),
                                'harga_gold'    => $data['price'] + ($data['price'] * $rate_gold_pulsa),
                                'status'        => ($data['seller_product_status'] === true ? "available" : "unavailable"),
                                'catatan'   => $data['desc'],

                            ]);

                    }


                }else if($data['category'] == "Voucher" && $kategori->tipe == "Voucher"){

                    $cekvoucher = Layanan::where('provider_id',$data['buyer_sku_code'])->first();

                        if(!$cekvoucher){
    
                            $layanan = new Layanan();
                            $layanan->kategori_id = $kategori->id;
                            $layanan->brand = $data['brand'];
                            $layanan->layanan = $data['product_name'];
                            $layanan->provider_id = $data['buyer_sku_code'];
                            $layanan->provider = "digiflazz";
                            $layanan->harga_modal = $data['price'];
                            $layanan->harga_guest = $data['price'] + ($data['price'] * $rate_normal_pulsa);
                            $layanan->harga_member  = $data['price'] + ($data['price'] * $rate_reseller_pulsa);
                            $layanan->harga_gold  = $data['price'] + ($data['price'] * $rate_gold_pulsa);
                            $layanan->tipe = $data['type'];
                            $layanan->catatan = $data['desc'];
                            $layanan->status = "available";
                            $layanan->save();
                            
                        }else{

                            $cekvoucher->update([

                                'harga_modal' => $data['price'],
                                'harga_guest' => $data['price'] + ($data['price'] * $rate_normal_pulsa),
                                'harga_member'    => $data['price'] + ($data['price'] * $rate_reseller_pulsa),
                                'harga_gold'    => $data['price'] + ($data['price'] * $rate_gold_pulsa),
                                'status'        => ($data['seller_product_status'] === true ? "available" : "unavailable"),
                                'catatan'   => $data['desc'],

                            ]);

                        }
                    }
                
                }
            }
        }

    }
}
