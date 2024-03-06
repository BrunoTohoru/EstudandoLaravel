<h3>Fornecedor</h3>


@php
    /*
    if (!<condição>) {} //enquanto executa se o retorno for true
    */
@endphp
{{--@dd($fornecedores)--}}
{{--UNLESS executa se o retorno for FALSE--}}

Fornecedor: {{$fornecedores[0]['nome']}}
<br>
Status: {{$fornecedores[0]['status']}}
<br>
@unless($fornecedores[0]['status'] == 'S')
    Fornecedor Inativo
@endunless