<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
{
    // Validação dos dados de entrada
    $request->validate([
        'login' => 'required|string',
        'senha' => 'required|string',
    ]);

    // Dados de exemplo para validação
    $loginValido = 'usuario123';
    $senhaValida = 'senha123';

    // Recupera os dados da requisição
    $login = $request->input('login');
    $senha = $request->input('senha');

    // Valida o login e a senha
    if ($login === $loginValido && $senha === $senhaValida) {
        return response()->json([
            'success' => true,
            'message' => 'Login válido!',
        ]);
    } else {
        return response()->json([
            'success' => false,
            'message' => 'Login ou senha inválidos.',
        ], 401); // Código 401: Unauthorized
    }
}
}