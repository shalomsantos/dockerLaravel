@extends('template')

@section('content')
    @if (session()->has('message'))
        <div id="modal" class="modal d-block" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Status:.</h5>
                        <button type="button" class="btn-close" onclick="modalClose()"></button>
                    </div>
                    <div class="modal-body">
                        <p>{{ session()->get('message') }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" onclick="modalClose()">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div class="container py-3">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h4><span class="badge text-bg-dark">Produtos</span></h4>
                <div class="d-flex gap-2">
                    <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm"><i class="fa-solid fa-plus me-2"></i>Novo produto</a>
                    <form action="{{ route('products.index') }}" method="GET" class="d-flex gap-2">
                        @csrf
                        <input type="text" class="form-control form-control-sm" placeholder="pesquisar:." name="search">
                        <button type="submit" class="btn btn-primary btn-sm"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped mb-0">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome do produto</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Valor</th>
                            <th scope="col">...</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <th> {{ $product->id }}</th>
                                <td> {{ $product->nome }}</td>
                                <td> {{ $product->categoria }}</td>
                                <td> {{ $product->valor }}</td>
                                <td>
                                    <a href="{{ route('products.edit', ['product' => $product->id]) }}" class="btn btn-primary btn-sm">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                    <a href="{{ route('products.show', ['product' => $product->id]) }}" class="btn btn-secondary btn-sm">
                                        <i class="fa-solid fa-address-card"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> 
        </div>
    </div>
@endsection