<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public function produtos() {
        // return $this->belongsToMany('App\Produto', 'pedidos_produtos');
        return $this->belongsToMany('App\Item'/*1*/, 'pedidos_produtos'/*2*/, 'pedido_id'/*3*/, 'produto_id'/*4*/)->withPivot('id', 'created_at', 'updated_at');
        /*
            1 - Modelo do relacionamento NxN em relação o Modelo que estamos emplementando
            2 - É a tabela auxiliar que armazena os registros de relacionamento
            3 - Representa o nome da FK da tabela mapeada pelo modelo na tabela de relacionamento
            4 - Representa o nome da FK da tabela mapeada pelo modelo utilizado no relacionamento que estamos implementando
        */
    }
}
