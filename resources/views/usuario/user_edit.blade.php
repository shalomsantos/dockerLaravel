@extends('template')

@section('content')
    <div class="container py-4">

        @if (session()->has('message'))
        {{ session()->get('message') }}
            
        @endif

        <form action="{{ route('users.update', ['user' => $user->id]) }}" method="post" class="card p-3 col-6">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div class="row">
                <div class="col-9 mb-3">
                    <label for="exampleFormControlInput1" class="form-label text-main mb-1 text-body-tertiary">Nome:.</label>
                    <input type="text" class="form-control form-control-sm" name="name" value="{{ $user->name }}">
                </div>
                <div class="col-3 mb-3">
                    <label for="exampleFormControlInput1" class="form-label text-main mb-1 text-body-tertiary">Id:.</label>
                    <input type="text" class="form-control form-control-sm" name="id" value="{{ $user->id }}">
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label text-main mb-1 text-body-tertiary">Email:.</label>
                <input type="email" class="form-control form-control-sm" name="email" value="{{ $user->email }}">
            </div>
            <div class="row">
                <div class="col-6 mb-3">
                    <label for="exampleFormControlInput1" class="form-label text-main mb-1 text-body-tertiary">Senha:.</label>
                    <input type="text" class="form-control form-control-sm" name="password" value="{{ $user->password }}">
                </div>
                <div class="col-6 mb-3">
                    <label for="exampleFormControlInput1" class="form-label text-main mb-1 text-body-tertiary">Data:.</label>
                    <input type="text" class="form-control form-control-sm disabled" name="email_verified_at" value="{{ $user->email_verified_at }}">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
@endsection