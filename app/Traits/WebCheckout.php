<?php
namespace App\Traits;
use Illuminate\Support\Facades\Http;

trait WebCheckout {
    public function createRequest($order)
    {        
        /* this data connection is a helpers Connection */
        $data = connection($order);   

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


  