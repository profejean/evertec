@extends ('layout')

@section ('content')
    <div class="container-fluid">
        <div class="row mt-5 bg-primary p-4 shadow-lg p-3 mb-5 rounded">
            <div class="col-4">
                <h4 class="text-center text-white">
                    Name of product
                </h4>
            </div>
            <div class="col-4">
                <h4 class="text-center text-white">
                    Price
                </h4>
            </div>
            <div class="col-4">
                <h4 class="text-center text-white">
                    Options
                </h4>
            </div>
        </div>
        @foreach($products as $p)
        <div class="row mt-3">
            <div class="col-4">
                <h4 class="text-center">{{$p->name}}</h4>
            </div>
            <div class="col-4">
                <h4 class="text-center">{{$p->price}}</h4>
            </div>
            <div class="col-4 text-center">
              
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#buy-{{$p->id}}">
                    Order Product
                </button>
             
               
            </div>
        </div>
        @include('modal-buy')
        @endforeach
    </div>
@endsection