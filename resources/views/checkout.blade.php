@extends ('layout')

@section ('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h3 class="text-center mt-3">
                Gracias por su compra, por favor confirme los datos
            </h3>
            <h5 class="text-center mt-3">
                Nombre: {{$order->customer_name}}
            </h5>
            <h5 class="text-center mt-3">
                Correo: {{$order->customer_email}}
            </h5>
            <h5 class="text-center mt-3">
                Teléfono: {{$order->customer_mobile}}
            </h5>
             <h5 class="text-center mt-3">
                Producto: {{product_name($order->product_id)}}
            </h5>

            
        </div>
        <div class="col-12 text-center">
            <a href="" class="btn btn-primary mt-3  ">
                Confirmar compra
            </a>
        </div>
         <div class="col-12 text-center">
            <a href="{{route('orders')}}" class="btn btn-primary mt-3  ">
                Ver historial de ordenes
            </a>
        </div>
    </div>
</div>

@endsection