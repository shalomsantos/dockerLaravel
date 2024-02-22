<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public readonly User $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function index()
    {
        $search = request('search');

        if($search){
            $users = $this->user->query()->where([['nome', 'like', '%'.$search.'%']])->get();
            echo 'pesquisou';
        }else{
            $users = $this->user->all();
        }

        return view('/usuario/users', ['users' => $users, 'search' => $search]);
    }

    public function create()
    {
        return view('/usuario/create_user');
    }

    public function store(Request $request)
    {
        $userCreate = $this->user->create([
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'telefone' => $request->input('telefone'),
            'senha' => $request->input('senha')
        ]);
        
        if($userCreate){
            return redirect('users')->with('message', 'Usuário cadastrado com sucesso.');
        }
        return redirect('users')->with('message', 'Erro ao cadastrar novo usuário.');   
    }

    public function show($user)
    {
        $userContent = $this->user->find($user);

        return view('/usuario/user_show', ['user' => $userContent]);
    } 

    public function edit($user)
    {
        $user = $this->user->find($user);
        return view('/usuario/user_edit', ['user' => $user]);
    }

    public function update(Request $request, string $id)
    {   
        $user = $this->user->find($id);

        $updated = $user->where('id', $id)->update($request->except(['_token', '_method']));

        if($updated){
            return redirect()->route('users.index')->with('message', 'successfully updated');
        }
        return redirect()->route('users.index')->with('message', 'successfully updated');
    }
    
    public function destroy(string $id)
    {
        $this->user->where('id', $id)->delete();
        return redirect()->route('users.index');
    }
}
