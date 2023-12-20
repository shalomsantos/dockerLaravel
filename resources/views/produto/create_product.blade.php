@extends('template')

@section('content')
    <div class="container py-4">
        <form action="{{ route('products.store') }}" method="post" class="card col-9 mx-auto">
            <div class="card-header">Products</div>
            <div class="card-body">
                @csrf
                <div class="row p-3">
                    <div class="col-6 mb-3">
                        <label class="form-label text-main mb-1 text-body-tertiary">Nome:.</label>
                        <input type="name" class="form-control form-control-sm" name="nome">
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label text-main mb-1 text-body-tertiary">Path:.</label>
                        <input type="text" class="form-control form-control-sm" name="path">
                    </div>
                    <div class="col-4 mb-3">
                        <label class="form-label text-main mb-1 text-body-tertiary">Categoria:.</label>
                        <select class="form-select form-select-sm" name="categoria">
                            <option value='' selected>Selecione...</option>
                            <option value="Tecnologia">Tecnologia</option>
                            <option value="Esporte">Esporte</option>
                            <option value="Escritório">Escritório</option>
                        </select>
                    </div>
                    <div class="col-4 mb-3">
                        <label class="form-label text-main mb-1 text-body-tertiary">Valor:.</label>
                        <input type="number" class="form-control form-control-sm" name="valor">
                    </div>
                    <div class="col-4 d-flex align-items-center">
                        <button type="submit" class="btn btn-primary btn-sm">New product</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
   
@endsection