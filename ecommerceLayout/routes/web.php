<?php

use App\Http\Controllers\ControllerPrincipal;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\ProdutoController;



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

Route::get('/configuracao', function () {
    return view('configuracao');
})->name('configuracao');

Route::get('/adicionar-status', function () {
    return view('adicionar-status');
})->name('adicionar-status');

Route::middleware('web')->group(function () {
    Route::post('/login', [AuthController::class, 'authenticate'])->name('login.submit');
});

Route::get('/adicionar-produto', [ProdutoController::class, 'adicionarProduto'])->name('adicionar-produto');


Route::get('/status/create', [StatusController::class, 'create'])->name('status.create');

Route::post('/adicionar-status', [StatusController::class, 'adicionarStatus'])->name('status.adicionar');

Route::get('/editar-status', [StatusController::class, 'index'])->name('editar-status');

Route::post('/register', [AuthController::class, 'register'])->name('register.submit');


