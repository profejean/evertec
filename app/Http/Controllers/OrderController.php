<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Redirect;
use DB;
use Carbon\Carbon;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::orderBy('status','asc')->get();
        return view('orders', compact('orders'));
    }

    public function order(Request $request, $id){
        /* Validate data */
        $order = $request->validate([
            'customer_name' => ['required'],
            'customer_email' => ['required', 'email'],
            'customer_mobile' => ['required','numeric'],
        ]);

   


            $date = Carbon::now('America/Caracas');
         
            $orders = new Order();
            $orders->status = 'CREATED';
            $orders->product_id = $id;
            $orders->created_at	 = $date->toDateTimeString();
            $orders->updated_at = $date->toDateTimeString();
            $orders->fill($order)->save();

            $orderLast = Order::latest()->first()->id;

            return Redirect::route('checkout', $orderLast)->with('success', 'Se ha creado una orden con exito'); 
            
  
            
    }

    public function checkout($id){ 
        $order = Order::where('id',$id)->first(); 
        return view('checkout', compact('order'));
    }

    public function delete($id){
        $order = Order::where('id',$id)->first();
        $order->delete();

        return Redirect::back()->with('success','Has rechazado la orden correctamente');
    }
}
