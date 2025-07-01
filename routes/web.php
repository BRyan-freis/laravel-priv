<?php

use App\Models\Usuarios;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;

Route::get('/', function () {
    return view('welcome');

Route::view('/cadastro', 'cadastro')->name('cadastro');
});

Route::view('/home', 'home')->name('home');

Route::view('/cadastro', 'cadastro')->name('cadastro');

// Rota GET: exibe o formulário de cadastro de cliente
Route::get('/usuarios/cadastrar', [UsuariosController::class, 'create'])->name('usuarios.create');

// Rota POST: recebe os dados do formulário e salva no banco
Route::post('/usuarios', [UsuariosController::class, 'store'])->name('usuarios.store');
