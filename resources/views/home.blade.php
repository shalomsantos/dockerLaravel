@extends('template')

@section('content')
    <main>
        <div class="album py-4 bg-body-tertiary">
            <div class="container d-flex flex-nowrap gap-3 overflow-x-auto">
                @foreach ($products as $product)
                    <div class="card position-relative col-12 col-sm-5 col-md-4 col-lg-3 shadow-sm">
                        <div class="rounded-5 rounded-top-0"></div>
                        <div class="p-4 mx-auto">
                            <img src="{{ $product->path }}" alt="" width="200" height="200">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">{{ $product->nome }}</h4>
                            <p class="card-text fs-6 text-danger text-decoration-line-through mb-0 pb-0">R$ {{ $product->valor + 50 }},00</p>
                            <p class="card-text fs-4 text-success fw-bold mb-0 pb-0">R$ {{ $product->valor }},00</p>
                            <p class="text-body-secondary mt-0 pt-0">À vista no pix</p>
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-outline-primary"><i class="fa-solid fa-bag-shopping"></i> Comprar</a>
                                <a class="btn btn-outline-success" href="{{ url('/car-shop')}}"><i class="fa-solid fa-cart-plus"></i></a>
                            </div>
                            <a class="position-absolute top-0 end-0 pe-1"><i class="fa-solid fa-circle-info"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection