<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return 'Usuarios';
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
