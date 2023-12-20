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
        $users = $this->user->all();
        return view('/usuario/users', ['users' => $users]);
    }

    public function create()
    {
        return view('/usuario/create_user');
    }

    public function store(Request $request)
    {
        $userCreate = $this->user->create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password')
            // 'password' => password_hash($request->input('password'), PASSWORD_DEFAULT),
        ]);
        
        if($userCreate){
            return redirect()->back()->with('message', 'successfully created');
        }
        return redirect()->back()->with('message', 'error created');   
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
            return redirect()->back()->with('message', 'successfully updated');
        }
        return redirect()->back()->with('message', 'successfully updated');
    }
    
    public function destroy(string $id)
    {
        $this->user->where('id', $id)->delete();
        return redirect()->route('users.index');
    }
}
