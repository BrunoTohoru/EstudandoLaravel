<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal () {
        $motivo_contatos =[
            1 => 'dúvida',
            2 => 'elogio',
            3 => 'reclamação'
        ];

        return view('site.principal', ['motivo_contatos' => $motivo_contatos]);
    }
}
