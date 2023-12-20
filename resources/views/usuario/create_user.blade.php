@extends('template')

@section('content')
    <div class="container py-4">
        @if (session()->has('message'))
            {{ session()->get('message') }}
        @endif
        <form action="{{ route('users.store') }}" method="post" class="card p-3 col-6">
            @csrf
            <div class="col mb-3">
                <label for="exampleFormControlInput1" class="form-label text-main mb-1 text-body-tertiary">Nome:.</label>
                <input type="text" class="form-control form-control-sm" name="name" >
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label text-main mb-1 text-body-tertiary">Email:.</label>
                <input type="email" class="form-control form-control-sm" name="email">
            </div>
            <div class="row">
                <div class="col-6 mb-3">
                    <label for="exampleFormControlInput1" class="form-label text-main mb-1 text-body-tertiary">Senha:.</label>
                    <input type="text" class="form-control form-control-sm" name="password">
                </div>
                <div class="col-6 mb-3 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary w-100">Adicionar</button>
                </div>
            </div>
        </form>
    </div>
@endsection