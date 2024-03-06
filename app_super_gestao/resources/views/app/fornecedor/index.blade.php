<h3>Fornecedores</h3>


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
@endphp
{{--@dd($fornecedores)--}}
{{--UNLESS executa se o retorno for FALSE--}}

<hr>
@isset($fornecedores)

    @foreach($fornecedores as $indice => $fornecedor) <!-- Aqui o foreach cria uma cópia($fornecedor) do array original($fornecedores) -->
        Fornecedor: {{$fornecedor['nome']}}
        <br>
        Status: {{$fornecedor['status']}}
        <br>
        CNPJ: {{$fornecedor['cnpj'] ?? 'Dado não foi preenchido'}}
        <br>
        Telefone: ({{$fornecedor['ddd'] ?? '00'}}) {{$fornecedor['telefone'] ?? ''}}
        <br>
        @switch($fornecedor['ddd'])
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
        <hr>
    @endforeach
@endisset
