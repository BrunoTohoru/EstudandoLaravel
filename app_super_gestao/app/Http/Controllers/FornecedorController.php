<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = ['FOR1', 'FOR2', 'FOR3', 'FOR4', 'FOR', 'FOR', 'FOR', 'FOR', 'FOR', 'FOR', 'FOR'];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
