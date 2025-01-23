<?php

use App\Http\Controllers\ControllerPrincipal;
use Illuminate\Support\Facades\Route;

// Rota usando o controlador
Route::get('/', [ControllerPrincipal::class, 'index']);

// Rota de fallback (para redirecionar rotas inválidas
Route::fallback(function () {
    return redirect('/');
});

// Caso o usuário digite /admin no final da URL ele terá acesso a tela de login do administrador
Route::get('/admin', function () {
    return view('admin');
});
