<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('home');
    }

    public function principal()
    {
        return "HomeController.principal()";
        //return view('principal');
    }
}