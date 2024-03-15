<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index() {
        return view('site.login', ['titulo' => 'login']);
    }

    public function autenticar(Request $request) {
        $regras = [
            'usuario' => 'email',
            'senha' => 'required'
        ];

        // mensagens de validação
        $feedback = [
            'usuario.email' => 'O campo usuário (e-mail) é obrigatório',
            'senha.required' => 'O campo sneha é obrigatório',
        ];

        $request->validate($regras, $feedback);
        
        print_r($request->all());
    }
}
