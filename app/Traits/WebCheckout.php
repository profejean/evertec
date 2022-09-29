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
                "tranKey"=> config('app.placetopay_key')
            ],
            "payer"=> [            
            "name"=> "John",                      
            "email"=> "profesorjeandiaz@gmail.com", 
            "phone"=> "+573111111111"
            ],
            "payment"=> [
                "reference"=> "1122334455",
                "description"=> "Prueba",
                "amount"=> [
                "currency"=> "USD",
                "total"=> 100
                ]
            ],            
            "expiration"=> "2022-09-30T00:00:00-05:00",
            "returnUrl"=> "https://dnetix.co/p2p/client",
            "ipAddress"=> "127.0.0.1",
            "userAgent"=> "PlacetoPay Sandbox"
        ];   
        
        $data2 = [
            "auth"=> [
            "login"=> "c51ce410c124a10e0db5e4b97fc2af39",
            "tranKey"=> "VQOcRcVH2DfL6Y4B4SaK6yhoH/VOUveZ3xT16OQnvxE=",
            "nonce"=> "NjE0OWVkODgwYjNhNw==",
            "seed"=> "2021-09-21T09:34:48-05:00"
            ],
        "internalReference"=> 1,
        "reference"=> "12345",
        "signature"=> "3ccbae73d6a5bb1be7e00f9a2cfc3cc7cd95a311"
        ];

        $data3 = [
            "locale"=> "es_CO",
            "auth"=> [
                "login"=> "c51ce410c124a10e0db5e4b97fc2af39",
                "tranKey"=> "VQOcRcVH2DfL6Y4B4SaK6yhoH/VOUveZ3xT16OQnvxE=",
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
            "expiration"=> "2021-12-30T00:00:00-05:00",
            "returnUrl"=> "https://dnetix.co/p2p/client",
            "ipAddress"=> "127.0.0.1",
            "userAgent"=> "PlacetoPay Sandbox"
        ];

        $url1= 'https://stoplight.io/mocks/placetopay-api/webcheckout-docs/10862976/api/session';

        $url2= 'https://checkout-test.placetopay.com/api/notify';

        $url3='https://checkout-test.placetopay.com/api/session';

        $url4='https://checkout-test.placetopay.com/api/collect';

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Prefer' => 'code=200, dynamic=true'
        ])->post($url4, 
            $data3
        );    

        return $response;

    }
}


  