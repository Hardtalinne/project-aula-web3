<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        return view('categoria.index');
    }
    public function show($descricao)
    {
        return view('categoria.show', ['descricao' => $descricao]);
    }
    public function create()
    {
        return view('categoria.create');
    }
}