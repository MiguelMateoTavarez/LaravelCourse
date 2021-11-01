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

    public function show($id)
    {
        return "Mostrando detalles del usuario: $id";
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
