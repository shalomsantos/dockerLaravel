@extends('template')

@section('content')
    <div class="container py-4">
        <form action="{{ route('users.store') }}" method="post" class="card col-9 mx-auto">
            <div class="card-header">Novo Usuário:.</div>
            <div class="card-body">
                @csrf
                <div class="row">
                    <div class="col-12 col-sm-6 mb-3">
                        <label class="form-label text-main mb-1 text-body-tertiary">Nome:.</label>
                        <input type="name" class="form-control form-control-sm" name="nome">
                    </div>
                    <div class="col-12 col-sm-6 mb-3">
                        <label class="form-label text-main mb-1 text-body-tertiary">Email:.</label>
                        <input type="email" class="form-control form-control-sm" name="email">
                    </div>
                    <div class="col-12 col-sm-6 mb-3">
                        <label class="form-label text-main mb-1 text-body-tertiary">Telefone:.</label>
                        <input type="text" class="form-control form-control-sm" name="telefone">
                    </div>
                    <div class="col-12 col-sm-6 mb-3">
                        <label class="form-label text-main mb-1 text-body-tertiary">Senha:.</label>
                        <input type="text" class="form-control form-control-sm" name="senha">
                    </div>
                    <div class="col-12 col-sm-6">
                        <button type="submit" class="btn btn-primary btn-sm">Adicionar Usuário</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection