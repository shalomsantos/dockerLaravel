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
                    <div class="mb-3">
                        <label class="form-label">Nome:</label>
                        <input type="text" class="form-control form-control-sm disabled" value="{{ $product->nome }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Categoria:</label>
                        <input type="text" class="form-control form-control-sm disabled" value="{{ $product->categoria }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Valor:</label>
                        <input type="text" class="form-control form-control-sm disabled" value="{{ $product->valor }}">
                    </div>
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </div>
            </div>
        </form>
    </div>
@endsection