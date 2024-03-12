<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;

class FornecedorSeedes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //instanciando objeto
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 100';
        $fornecedor->site = 'fornecedor100.com.br';
        $fornecedor->uf = 'PR';
        $fornecedor->email = 'contato@fornecedor100.com.br';
        $fornecedor->save();

        //utilizando o método CREATE (atenção para o atributo FILLABLE da classe)
        Fornecedor::create([
            'nome' => 'Fornecedor 200',
            'site' => 'forncedor200.com.br',
            'uf' => 'RS',
            'email' => 'contato@fornecedor200.com.br'
        ]);

        //insert
        DB::table('fornecedores')->insert([
            'nome' => 'Fornecedor 300',
            'site' => 'forncedor300.com.br',
            'uf' => 'MG',
            'email' => 'contato@fornecedor300.com.br'
        ]);
    }
}
