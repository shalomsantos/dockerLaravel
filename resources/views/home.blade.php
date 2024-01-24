@extends('template')

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide py-5 mx-0 px-0">
        <div id="carousel-indicators" class="carousel-indicators">
            @for ($i = 0; $i < $count; $i++)
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $i }}"></button>
            @endfor
        </div>
        <div id="carousel" class="carousel-inner">
            @foreach ($products as $product)
                <div class="carousel-item">
                    <div class="row p-3">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                            <div class="cotainer">
                                <img src="{{ $product->path }}" alt="" width="400" height="300">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 d-flex flex-column justify-content-center">
                            <div class="container">
                                <h1>{{ $product->nome }}</h1>
                                <p class="card-text fs-6 text-danger text-decoration-line-through mb-0 pb-0">R$ {{ $product->valor + 50 }},00</p>
                                <p class="card-text fs-4 text-success fw-bold mb-0 pb-0">R$ {{ $product->valor }}</p>
                                <p class="text-body-secondary">À vista no pix.</p>
                                <div>
                                    <a class="btn btn-primary">Comprar</a>
                                    <a class="btn btn-success"><i class="fa-solid fa-basket-shopping"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <i class="fa-solid fa-chevron-left fw-bold fs-1 text-dark"></i>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <i class="fa-solid fa-chevron-right fw-bold fs-1 text-dark"></i>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container py-3">
        <div class="swiper">
            <div class="swiper-wrapper" style="height: 100 !important;">
                @foreach ($products as $product)
                    <div class="swiper-slide">
                        <div class="card m-2 p-3" style="height: 400px;">
                            <img src="{{ $product->path }}" alt="" width="100%" height="150">
                            <div class="card-body p-0 d-flex flex-column justify-content-between">
                                <h4 class="card-title">{{ $product->nome }}</h4>
                                <div>
                                    <p class="card-text fs-6 text-danger text-decoration-line-through mb-0 pb-0">R$ {{ $product->valor + 50 }},00</p>
                                    <p class="card-text fs-4 text-success fw-bold mb-0 pb-0">R$ {{ $product->valor }}</p>
                                    <p class="text-body-secondary">À vista no pix.</p>
                                    <div>
                                        <a class="btn btn-primary btn-sm">Comprar</a>
                                        <a class="btn btn-success btn-sm"><i class="fa-solid fa-basket-shopping"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>

@endsection
