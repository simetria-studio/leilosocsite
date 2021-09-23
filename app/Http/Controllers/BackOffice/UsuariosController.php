<?php

namespace App\Http\Controllers\BackOffice;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsuariosController extends Controller
{

    public function admins()
    {

        $users = User::with('info')->where('role', 'admin')->get();
        return view('backoffice.usuarios.admins', compact('users'));

    }

}
