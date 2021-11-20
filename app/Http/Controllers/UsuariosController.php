<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->email;
        $senha = $request->senha;

        $usuarios = Usuario::where('email', '=', $email)->where('senha', '=', $senha)->count();

        if ($usuarios === 1) {
            return view('home');
        }
        return view('login');
    }
}
