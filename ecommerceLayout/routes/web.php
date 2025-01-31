<?php

use App\Http\Controllers\ControllerPrincipal;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


// Rota usando o controlador
Route::get('/', [ControllerPrincipal::class, 'index']);

// Rota de fallback (para redirecionar rotas inválidas
Route::fallback(function () {
    return redirect('/');
});

// Caso o usuário digite /admin no final da URL ele terá acesso a tela de login do administrador
Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/hub-de-alteracoes', function () {
    return view('hub-de-alteracoes');
})->name('hub-de-alteracoes');

Route::get('/adicionar-produto', function () {
    return view('adicionar-produto');
})->name('adicionar-produto');

Route::middleware('web')->group(function () {
    Route::post('/login', [AuthController::class, 'authenticate'])->name('login.submit');
});


Route::post('/register', [AuthController::class, 'register'])->name('register.submit');


