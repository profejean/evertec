<?php
use App\Models\Product;

function product_name($id){
    return Product::where('id',$id)->first()->name;
}

function product_price($id){
    return Product::where('id',$id)->first()->price;
}