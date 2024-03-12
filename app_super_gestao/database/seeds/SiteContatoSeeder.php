<?php

use Illuminate\Database\Seeder;
use App\SiteContato;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        SiteContato::create([
            'nome' => 'Sistema SG',
            'telefone' => '(11) 99999-9999',
            'email' => 'contato@sg.com.br',
            'motivo_contato' => 1,
            'mensagem' => 'Seja bem vindo ao sistema Super Gestão'
        ]);
        SiteContato::create([
            'nome' => 'Sistema',
            'telefone' => '(11) 99999-9999',
            'email' => 'contato@.com.br',
            'motivo_contato' => 2,
            'mensagem' => 'Soi'
        ]);
    }
}
