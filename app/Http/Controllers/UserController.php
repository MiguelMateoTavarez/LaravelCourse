<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

        $users = User::all();

        return view('users')
            ->with('users', $users)
            ->with('title', 'Listado de usuarios');
    }

    public function show(User $user)
    {
        return view('details')
        ->with('user', $user->name)
        ->with('title', 'Detalles de usuario');
    }

    public function create()
    {
        return 'Crear usuario';
    }

    public function edit($id)
    {
        return "Editar los datos del usuario: $id";
    }
}
