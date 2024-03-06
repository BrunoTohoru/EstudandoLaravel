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
    $const = 2;
@endphp
{{--@dd($fornecedores)--}}
{{--UNLESS executa se o retorno for FALSE--}}


@isset($fornecedores)
    Fornecedor: {{$fornecedores[$const]['nome']}}
    <br>
    Status: {{$fornecedores[$const]['status']}}
    <br>
    CNPJ: {{$fornecedores[$const]['cnpj'] ?? 'Dado não foi preenchido'}}
    <br>
    Telefone: ({{$fornecedores[$const]['ddd'] ?? '00'}}) {{$fornecedores[$const]['telefone'] ?? ''}}
    <br>
    @switch($fornecedores[$const]['ddd'])
        @case ('11')
            São Paulo - SP
            @break
        @case ('85')
            Fortaleza - CE 
            @break
        @case ('32')
            Juiz de Fora - MG
            @break
        @default
            Estado não idenetificado
    @endswitch
@endisset