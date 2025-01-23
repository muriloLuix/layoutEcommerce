<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerPrincipal extends Controller
{
    public function index()
    {
        // Retorna a view 
        return view('meusite'); // meusite.blade.php
    }
}
