@extends('template')

@section('content')
    @if (session()->has('message'))
        <div id="modal" class="modal d-block" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Status</h5>
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
    <div class="container py-3 table-responsive-lg">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h4 class="d-none d-md-block"><span class="badge text-bg-dark">Usuários</span></h4>
                <div class="d-flex gap-2">
                    <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm"><i class="fa-solid fa-plus me-2"></i>Novo usuário</a>
                    <form action="{{ route('users.index') }}" method="GET" class="d-flex gap-2">
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
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Senha</th>
                            <th scope="col">...</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td class="text-break"> {{ $user->nome }}</td>
                                <td class="text-break"> {{ $user->email }}</td>
                                <td class="text-break"> {{ $user->telefone }}</td>
                                <td class="text-break"> {{ $user->senha }} </td>
                                <td class="text-break">
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
        </div>
    </div>
@endsection