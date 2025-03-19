<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\CursoController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\UsuarioController;

Route::get('/cursos', [CursoController::class, 'index']);
Route::get('/grupos', [GrupoController::class, 'index']);
Route::get('/usuarios', [UsuarioController::class, 'index']);
