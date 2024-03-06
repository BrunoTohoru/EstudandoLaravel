<h3>Fornecedor</h3>


@php
    /*
    if(empty($variavel)) {} //retornar true se a variável estivere vazia
    - ''
    - 0
    - 0.0
    - '0'
    - null
    - false
    - array[]
    - $var
    */
    $const = 1;
@endphp
{{--@dd($fornecedores)--}}
{{--UNLESS executa se o retorno for FALSE--}}


@isset($fornecedores)
    Fornecedor: {{$fornecedores[$const]['nome']}}
    <br>
    Status: {{$fornecedores[$const]['status']}}
    <br>
    CNPJ: {{$fornecedores[$const]['cnpj'] ?? 'Dado não foi preenchido'}}
    <!--
        $variavel testada não estiver definida (isset)
        ou
        $variável testada possuir o valor NULL
    -->
    <br>
@endisset