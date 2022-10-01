<?php
use App\Models\Product;
use Carbon\Carbon;

function connection($order){

$cr_date = $order->created_at;
$carbon_date = Carbon::parse($cr_date);
$carbon_date->addHours(1);
$endDate = $carbon_date->toDateTimeString();

    $info = [
            "locale"=> "es_CO",
            "auth"=> [
                "login"=> config('app.placetopay_login'),
                "tranKey"=> config('app.placetopay_key'),
                "nonce"=> "NjE0OWVkODgwYjNhNw==",
                "seed"=> $order->created_at
            ],
            "payment"=> [
                "reference"=> "1122334455",
                "description"=> product_name($order->product_id),
                "amount"=> [
                "currency"=> "USD",
                "total"=> product_price($order->product_id)
                ]
            ],
            "instrument"=> [
                "token"=> [
                "token"=> "e07ca9986cf0ecac8a557fa11c07bf37ea35e9e3e3a4180c49"
                ]
            ],
            "expiration"=> $endDate,
            "returnUrl"=> "https://localhost",
            "ipAddress"=> "127.0.0.1",
            "userAgent"=> "PlacetoPay Sandbox"
        ];
    return $info;
}


