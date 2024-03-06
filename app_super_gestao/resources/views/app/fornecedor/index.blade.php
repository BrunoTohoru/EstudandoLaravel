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

    @php $i = 0 @endphp
    @while(isset($fornecedores[$i]))
        Fornecedor: {{$fornecedores[$i]['nome']}}
        <br>
        Status: {{$fornecedores[$i]['status']}}
        <br>
        CNPJ: {{$fornecedores[$i]['cnpj'] ?? 'Dado não foi preenchido'}}
        <br>
        Telefone: ({{$fornecedores[$i]['ddd'] ?? '00'}}) {{$fornecedores[$i]['telefone'] ?? ''}}
        <br>
        @switch($fornecedores[$i]['ddd'])
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
        @php $i++ @endphp
    @endwhile
@endisset
