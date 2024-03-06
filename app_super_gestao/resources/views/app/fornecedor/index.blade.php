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
    $const = 0;
@endphp
{{--@dd($fornecedores)--}}
{{--UNLESS executa se o retorno for FALSE--}}


@isset($fornecedores)
    Fornecedor: {{$fornecedores[$const]['nome']}}
    <br>
    Status: {{$fornecedores[$const]['status']}}
    <br>
    @isset($fornecedores[$const]['cnpj'])
        CNPJ: {{$fornecedores[$const]['cnpj']}}
        @empty($fornecedores[$const]['cnpj'])
            - Vazio
        @endempty
    @endisset
    <br>
@endisset