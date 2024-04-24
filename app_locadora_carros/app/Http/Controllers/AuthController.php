<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request) {
        //autenticação do usuario(email e senha)
        $token = auth('api')->attempt($request->all(['email', 'password']));

        if($token) { // usuario autenticado com sucesso
            //retorna um JWT - Json Web Token
            return response()->json(['token' => $token]);
        }else{ //erro de usuario ou senha
            return response()->json(['erro' => 'Usuário ou senha inválido!'], 403);

            //401 = Unauthorized -> nao autorizado
            //403 = forbidden -> proibido (login inválido)
        }
    }
    public function logout() {
        auth('api')->logout();
        return response()->json(['msg' => 'Logout foi realizado com sucesso!']);
    }
    public function refresh() {
        $token = auth('api')->refresh(); //cliente encaminhe um jwt válido
        return response()->json(['token' => $token]);
    }
    public function me() {
        return response()->json(auth()->user());
    }
}
