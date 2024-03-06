<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1', 
                'status' => 'N', 
                'cnpj' => '0',
                'ddd' => '11', //SÃO PAULO - SP
                'telefone' => '0000-0000'
            ],
            1 => [
                'nome' => 'Fornecedor 2', 
                'status' => 'S', 
                'cnpj' => null,
                'ddd' => '85', // FORTALEZA - CE
                'telefone' => '0000-0000'
            ],
            2 => [
                'nome' => 'Fornecedor 3', 
                'status' => 'S', 
                'cnpj' => null,
                'ddd' => '00', //JUIZ DE FORA - MG
                'telefone' => '0000-0000'
            ],
        ];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
