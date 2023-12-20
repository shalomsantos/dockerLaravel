@extends('template')

@section('content')
    <div class="container">
        <form action="{{ route('products.destroy', ['product' => $product->id]) }}" method="post" class="card col-12 col-md-6 mt-3">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="text-capitalize text-body-secondary fs-2">{{ $product->nome }}</h5>
                <span class="badge rounded-pill text-bg-secondary">{{ $product->id }}</span>
            </div>
            <div class="card-body">
                <div class="card-body">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control disabled" value="{{ $product->nome }}">
                        <span class="input-group-text" id="basic-addon1">Nome</span>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control disabled" value="{{ $product->categoria }}">
                        <span class="input-group-text" id="basic-addon1">Categoria</span>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control disabled" value="{{ $product->valor }}">
                        <span class="input-group-text" id="basic-addon1">Valor</span>
                    </div>
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </div>
            </div>
        </form>
    </div>
@endsection