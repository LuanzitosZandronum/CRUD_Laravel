<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index']);

Route::get('/register', function () {
    return view('register');
});

Route::get('/clientes', [UserController::class, 'index']);
Route::post('/register', [UserController::class, 'register']);
Route::get('/clientes/{id}/edit', [UserController::class, 'edit']);
Route::put('/clientes/{id}', [UserController::class, 'update']);
Route::delete('/clientes/{id}', [UserController::class, 'destroy']);
