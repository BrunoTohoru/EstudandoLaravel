@if(isset($pedido->id))
    <form method="POST" action="{{ route('pedido.update', ['pedido' => $pedido->id]) }}">
        @csrf
        @method('PUT')
@else
    <form method="POST" action="{{ route('pedido.store') }}">
        @csrf
@endif
        <select name="cliente_id" class="borda-preta">
            <option>-- Selecione um cliente --</option>
            @foreach ($clientes as $cliente)
                <option value="{{ $cliente->id }}" {{ ($produto->cliente_id ?? old('cliente_id')) == $cliente->id ? 'selected' : '' }}>{{ $cliente->nome }}</option>
            @endforeach
        </select>
        {{ $errors->has('cliente_id') ? $errors->first('cliente_id') : '' }}
        
        <button type="submit" class="borda-preta">{{ isset($pedido->id) ? 'Alterar' : 'Cadastrar' }}</button>
    </form>