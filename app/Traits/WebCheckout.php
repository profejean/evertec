<?php
namespace App\Traits;
use Illuminate\Support\Facades\Http;

trait WebCheckout {
    public function createRequest()
    {        
        
         $data = [
            "locale"=> "es_CO",
            "auth"=> [
                "login"=> config('app.placetopay_login'),
                "tranKey"=> config('app.placetopay_key'),
                "nonce"=> "NjE0OWVkODgwYjNhNw==",
                "seed"=> "2021-09-21T09:34:48-05:00"
            ],
            "payment"=> [
                "reference"=> "1122334455",
                "description"=> "Prueba",
                "amount"=> [
                "currency"=> "USD",
                "total"=> 100
                ]
            ],
            "instrument"=> [
                "token"=> [
                "token"=> "e07ca9986cf0ecac8a557fa11c07bf37ea35e9e3e3a4180c49"
                ]
            ],
            "expiration"=> "2022-12-30T00:00:00-05:00",
            "returnUrl"=> "https://dnetix.co/p2p/client",
            "ipAddress"=> "127.0.0.1",
            "userAgent"=> "PlacetoPay Sandbox"
        ];     

        $url= config('app.placetopay_url').'notify';      

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Prefer' => 'code=200, dynamic=true'
        ])->post($url, 
            $data
        );    

        return $response;

    }
}


  