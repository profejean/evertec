@extends ('layout')

@section ('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h3 class="text-center mt-3">
                Thank you for your purchase, please confirm him data
            </h3>
            <h5 class="text-center mt-3">
                Name: {{$order->customer_name}}
            </h5>
            <h5 class="text-center mt-3">
                Email: {{$order->customer_email}}
            </h5>
            <h5 class="text-center mt-3">
                Mobile: {{$order->customer_mobile}}
            </h5>
             <h5 class="text-center mt-3">
                Product: {{product_name($order->product_id)}}
            </h5>
            <h5 class="text-center mt-3">
                Price: {{product_price($order->product_id)}}
            </h5>

            
        </div>
        <div class="col-12 text-center">
            <a href="" class="btn btn-primary mt-3  ">
                Confirm the purchase
            </a>
        </div>
         <div class="col-12 text-center">
            <a href="{{route('orders')}}" class="btn btn-primary mt-3  ">
               View order history
            </a>
        </div>
    </div>
</div>

@endsection