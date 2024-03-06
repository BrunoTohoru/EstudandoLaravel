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

    @forelse($fornecedores as $indice => $fornecedor) <!-- Aqui o foreach cria uma cópia($fornecedor) do array original($fornecedores) -->
        {{-- @dd($loop) --}}
        Iteração atual: {{ $loop->iteration }} <!-- Apenas funciona para o foreach e forelse -->
        <br>
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
        <br>
        
        @if($loop->first)
            [-> Primeira iteração do loop]
        @endif

        @if($loop->last)
            [-> Última iteração do loop]
            <hr>
            Total de registros: {{ $loop->count }}
        @endif
        <hr>
    @empty
        Não existem fornecedores cadastrados
    @endforelse
@endisset

