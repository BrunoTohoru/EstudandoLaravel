<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'PrincipalController@principal');

Route::get('/sobre-nos', 'SobreNosController@sobreNos');

Route::get('/contato', 'ContatoController@contato');
//nome, categoria, assunto, mensagem

Route::get(
    '/contato/{nome}/{categoria_id}', 
    function(
        string $nome = 'Desconhecido',
        int $categoria_id = 1 // 1 - Informação 
    ){
        echo "Estamos aqui: $nome - $categoria_id";
    }
)->where('categoria_id','[0-9]+')//[0-9]+ -> caracteres entre 0 e 9 e tem que ter pelo menos 1 caracter.
->where('nome', '[A-Za-z]+')//[A-Za-z]+ -> entre A e Z e entre a e z contendo pelo menos 1 caracter. 
;
/* verbo http

get
post
put
patch
delete
options

*/