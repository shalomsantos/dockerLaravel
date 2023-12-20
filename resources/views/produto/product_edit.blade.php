@extends('template')

@section('content')
    <div class="container py-4">
        <form action="{{ route('products.update', ['product' => $product->id]) }}" method="post" class="card p-3 col-6">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div class="row">
                <div class="col-9 mb-3">
                    <label for="exampleFormControlInput1" class="form-label text-main mb-1 text-body-tertiary">Nome:.</label>
                    <input type="text" class="form-control form-control-sm" name="nome" value="{{ $product->nome }}">
                </div>
                <div class="col-3 mb-3">
                    <label for="exampleFormControlInput1" class="form-label text-main mb-1 text-body-tertiary">Id:.</label>
                    <input type="text" class="form-control form-control-sm" name="id" value="{{ $product->id }}">
                </div>
            </div>
            <div class="row">
                <div class="col-6 mb-3">
                    <label for="exampleFormControlInput1" class="form-label text-main mb-1 text-body-tertiary">Categoria:.</label>
                    <select class="form-select form-select-sm" name="categoria">
                        <option value='{{ $product->categoria? $product->categoria : ''}}' selected>Selecione...</option>
                        <option value="Tecnologia">Tecnologia</option>
                        <option value="Esporte">Esporte</option>
                        <option value="Escritório">Escritório</option>
                    </select>
                </div>
                <div class="col-6 mb-3">
                    <label for="exampleFormControlInput1" class="form-label text-main mb-1 text-body-tertiary">Valor:.</label>
                    <input type="number" class="form-control form-control-sm" name="valor" value="{{ $product->valor }}">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
@endsection