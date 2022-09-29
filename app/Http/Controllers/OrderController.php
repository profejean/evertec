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

        /* this product rejected */
        $trash = Order::onlyTrashed()->get();

        return view('orders', compact('orders','trash'));
    }

    public function order(Request $request, $id){
        /* Validate data */
        $order = $request->validate([
            'customer_name' => ['required'],
            'customer_email' => ['required', 'email'],
            'customer_mobile' => ['required','numeric'],
        ]);

        try {
            DB::beginTransaction();  
        

                $date = Carbon::now('America/Caracas');
            
                $orders = new Order();
                $orders->status = 'CREATED';
                $orders->product_id = $id;
                $orders->created_at	 = $date->toDateTimeString();
                $orders->updated_at = $date->toDateTimeString();
                $orders->fill($order)->save();                              

               DB::commit();

        } catch (\Exception $e) {       

            return Redirect::back()->with('error','The process has failed, please contact technical support');

        }

        $orderLast = Order::latest()->first()->id; 

        return Redirect::route('checkout', $orderLast)->with('success', 'An order has been created successfully');      
    }

    public function checkout($id){ 
        $order = Order::where('id',$id)->first(); 
        return view('checkout', compact('order'));
    }

    public function delete($id){
        $order = Order::where('id',$id)->first();
        $order->status = 'REJECTED';
        $order->save();
        $order->delete();

        return Redirect::back()->with('success','You have successfully declined the order');
    }
}
