@extends ('layout')

@section ('content')
<div class="container-fluid">
        <div class="row mt-5 bg-primary p-4 shadow-lg p-3 mb-5 rounded">
            <div class="col-2">
                <h4 class="text-center text-white">
                    Name of product
                </h4>
            </div>
            <div class="col-2">
                <h4 class="text-center text-white">
                    Name
                </h4>
            </div>
            <div class="col-2">
                <h4 class="text-center text-white">
                    Email 
                </h4>
            </div>
            <div class="col-2">
                <h4 class="text-center text-white">
                    Mobile 
                </h4>
            </div>
            <div class="col-2">
                <h4 class="text-center text-white">
                    Status
                </h4>
            </div>
            <div class="col-2">
                <h4 class="text-center text-white">
                    Options
                </h4>
            </div>
        </div>
        @foreach($orders as $o)
        <div class="row mt-3">
            <div class="col-2">
                <h4 class="text-center">{{product_name($o->product_id)}}</h4>
            </div>
            <div class="col-2">
                <h4 class="text-center">{{$o->customer_name}}</h4>
            </div>
            <div class="col-2">
                <h4 class="text-center">{{$o->customer_email}}</h4>
            </div>
            <div class="col-2">
                <h4 class="text-center">{{$o->customer_mobile}}</h4>
            </div>
            <div class="col-2">
                <h4 class="text-center">{{$o->status}}</h4>
            </div>       
            <div class="col-2 text-center">

                @if($o->status == 'CREATED')
                <a href="{{route('checkout', $o->id)}}" class="btn btn-primary">Confirm Purcharse</a>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#rejected-{{$o->id}}">
                    Rejected
                </button>
                @endif            
               
            </div>
        </div>
        @include('rejected')
        @endforeach

        @foreach($trash as $o)
        <div class="row mt-3">
            <div class="col-2">
                <h4 class="text-center">{{product_name($o->product_id)}}</h4>
            </div>
            <div class="col-2">
                <h4 class="text-center">{{$o->customer_name}}</h4>
            </div>
            <div class="col-2">
                <h4 class="text-center">{{$o->customer_email}}</h4>
            </div>
            <div class="col-2">
                <h4 class="text-center">{{$o->customer_mobile}}</h4>
            </div>
            <div class="col-2">
                <h4 class="text-center">{{$o->status}}</h4>
            </div>       
            <div class="col-2 text-center">

                           
               
            </div>
        </div>
        @endforeach
    </div>
@endsection