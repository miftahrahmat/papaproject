<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiGamesController extends Controller
{
    public function order($uid = null, $zone = null, $service = null, $order_id = null)
    {
        $target = $uid . $zone;
        $sign = md5(ENV("APIGAMES_SECRET") . ENV("APIGAMES_MERCHANT") . $order_id . $service . $target);
        $api_postdata = array(
            'ref_id' => $order_id,
            'merchant_id' => ENV("APIGAMES_MERCHANT"),
            'produk' => "$service",
            'tujuan' => $target,
            'signature' => $sign,
        );

        $header = array(
            'Content-Type: application/json',
        );

        return $this->connect("/transaksi", $api_postdata, $header);
    }
    
    public function cek($uid = null, $zone = null, $code = null)
    {
        $target = $uid . $zone;
        $sign = md5(ENV("APIGAMES_MERCHANT") . ENV("APIGAMES_SECRET"));
        $id = ENV("APIGAMES_MERCHANT");
        $data = [
            'merchant_id' => $id,
            'game_code' => $code,
            'user_id' => $target,
            'signature' => $sign,
        ];
        
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://v1.apigames.id/merchant/$id/cek-username/$code?user_id=$target&signature=$sign",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_POST => true,
          CURLOPT_POSTFIELDS => http_build_query($data),
          CURLOPT_HTTPHEADER => array('Content-Type: application/json')
        ));
        
        $chresult = curl_exec($curl);
        curl_close($curl);
        $json_result = json_decode($chresult, true);
        //dd($json_result);
        if($json_result['status'] == 1){
            return array(
                'status' => array('kode' => 200),
                'data' => array('nickname' => $json_result['data']['username'])
            );
        }else{
            return array(
                'status'     => array('kode' => 2),
                'data' => array('message' => $json_result['error_msg'])
            );
        }
        return $json_result;
        
    }

    public function status($poid)
    {
        return $this->connect("/merchant/" . ENV("APIGAMES_MERCHANT") . "/cektrx/$poid");
    }
    
    public function connect($url, $data = null, $header = null)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://v1.apigames.id" . $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

        if ($data) {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        } else {
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        }

        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        $chresult = curl_exec($ch);
        curl_close($ch);
        $json_result = json_decode($chresult, true);
        return $json_result;
    }

}
