@extends('template')

@section('content')
    <div class="container py-4">
        <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="post" class="card col-12 col-sm-9 mx-auto">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <div class="card-header d-flex justify-content-between align-items-center">
                <p class="text-capitalize text-body-secondary mb-0">{{ $user->nome }}</p>   
                <span class="badge rounded-pill text-bg-secondary">{{ $user->id }}</span>
            </div>
            <div class="card-body">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label for="exampleFormControlInput1" class="form-label">Email:.</label>
                            <h5 class="card-title">{{ $user->email }}</h5>
                        </div>
                        <div class="col-12 col-sm-6">
                            <label for="exampleFormControlInput1" class="form-label">Telefone:.</label>
                            <h5 class="card-title">{{ $user->telefone }}</h5>
                        </div>
                        <div class="col-12 col-sm-6">
                            <label for="exampleFormControlInput1" class="form-label">Senha:.</label>
                            <h5 class="card-title">{{ $user->senha }}</h5>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-danger btn-sm">Deletar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection