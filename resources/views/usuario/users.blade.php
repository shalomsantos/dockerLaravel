@extends('template')

@section('content')
    <div class="container py-4">
        <div class="card mt-3">
            <div class="card-header">Users</div>
            <div class="card-body">
                <h5 class="card-title">content:.</h5>
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae commodi explicabo voluptas et quisquam iste excepturi iure aut accusamus, non quam obcaecati labore quo illo fugiat soluta maiores vero omnis?</p>
                <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm" >New user</a>
            </div>
        </div>
        <table class="table table-striped my-4">
            <thead>
                <tr>
                {{-- <th scope="col">Id</th> --}}
                <th scope="col">Nome</th>
                <th scope="col">email</th>
                <th scope="col">Senha</th>
                <th scope="col">Data</th>
                <th scope="col">actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        {{-- <th> {{ $user->id }}</th> --}}
                        <td> {{ $user->name }}</td>
                        <td> {{ $user->email }}</td>
                        <td> {{ $user->password }}</td>
                        <td> {{ $user->email_verified_at?->format('d/m/y') ?? '*NdA' }} </td>
                        <td>
                            <a href="{{ route('users.edit', ['user' => $user->id]) }}" class="btn btn-primary btn-sm">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                            <a href="{{ route('users.show', ['user' => $user->id]) }}" class="btn btn-secondary btn-sm">
                                <i class="fa-solid fa-address-card"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection