@extends('template')

@section('content')
    <div class="container">
        <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="post" class="card col-12 col-md-6 mt-3">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="text-capitalize text-body-secondary fs-2">{{ $user->name }}</h5>
                <span class="badge rounded-pill text-bg-secondary">{{ $user->id }}</span>
            </div>
            <div class="card-body">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <label for="exampleFormControlInput1" class="form-label">Email:.</label>
                            <h5 class="card-title">{{ $user->email }}</h5>
                        </div>
                        <div class="col-6">
                            <label for="exampleFormControlInput1" class="form-label">Senha:.</label>
                            <h5 class="card-title">{{ $user->password }}</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="exampleFormControlInput1" class="form-label">Data:.</label>
                            <h5 class="card-title">{{ $user->email_verified_at?->format('d/m/y') ?? '*Nda' }}</h5>
                        </div>
                        <div class="col-6 d-flex align-items-end">
                            <button type="submit" class="btn btn-danger">Deletar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection