<h3>Fornecedor</h3>


@php
    /*
    if(isset($variavel)) {} //retornar true se a variável estivere definida
    */
@endphp
{{--@dd($fornecedores)--}}
{{--UNLESS executa se o retorno for FALSE--}}

@isset($fornecedores)
    Fornecedor: {{$fornecedores[1]['nome']}}
    <br>
    Status: {{$fornecedores[1]['status']}}
    <br>
    @isset($fornecedores[1]['cnpj'])
        CNPJ: {{$fornecedores[1]['cnpj']}}
    @endisset
    <br>
@endisset