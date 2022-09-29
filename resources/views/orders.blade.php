@extends ('layout')

@section ('content')
<div class="container-fluid">
        <div class="row mt-5 bg-primary p-4 shadow-lg p-3 mb-5 rounded">
            <div class="col-2">
                <h4 class="text-center text-white">
                    Nombre del producto
                </h4>
            </div>
            <div class="col-2">
                <h4 class="text-center text-white">
                    Nombre del cliente
                </h4>
            </div>
            <div class="col-2">
                <h4 class="text-center text-white">
                    Email del cliente
                </h4>
            </div>
            <div class="col-2">
                <h4 class="text-center text-white">
                    Teléfono del cliente
                </h4>
            </div>
            <div class="col-2">
                <h4 class="text-center text-white">
                    Estado de la orden
                </h4>
            </div>
            <div class="col-2">
                <h4 class="text-center text-white">
                    Opciones
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
                <button>Confirmar pago</button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#rejected-{{$o->id}}">
                    Rechazar
                </button>
                @endif            
               
            </div>
        </div>
        @include('rejected')
        @endforeach
    </div>
@endsection