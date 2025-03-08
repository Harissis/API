<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


// Rota POST (original)
Route::post('/login', [AuthController::class, 'login']);

// Rota GET (apenas para testes)
Route::get('/login', [AuthController::class, 'login']);

Route::post('/login', [AuthController::class, 'login']);

Route::post('/login', function (Request $request) {
    // Validação dos dados de entrada
    $request->validate([
        'login' => 'required|string',
        'senha' => 'required|string',
    ]);

    // Recupera os dados da requisição
    $login = $request->input('login');
    $senha = $request->input('senha');

    // Retorna os dados como resposta
    return response()->json([
        'login' => $login,
        'senha' => $senha,
    ]);


});