@extends('template')

@section('content')
    <div class="container">
        <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="post" class="card col-12 col-md-6 mt-3">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="text-capitalize text-body-secondary fs-2">{{ $user->nome }}</h5>   
                <span class="badge rounded-pill text-bg-secondary">{{ $user->id }}</span>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email:.</label>
                    <p class="card-title fw-bold">{{ $user->email }}</p>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Telefone:.</label>
                    <p class="card-title fw-bold">{{ $user->telefone }}</p>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Senha:.</label>
                    <p class="card-title fw-bold">{{ $user->senha }}</p>
                </div>
                <button type="submit" class="btn btn-danger btn-sm">Deletar</button>
            </div>
        </form>
    </div>
@endsection