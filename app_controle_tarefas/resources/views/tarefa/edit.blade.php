@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Atualizar tarefa - {{ $tarefa->id }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('tarefa.update', ['tarefa' => $tarefa->id]) }}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Tarefa</label>
                            <input type="text" class="form-control" name="tarefa" value="{{ $tarefa->tarefa ?? old('tarefa') }}">
                            {{ $errors->has('tarefa') ? $errors->first('tarefa') : '' }}
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Data limite conclusão</label>
                            <input type="date" class="form-control" name="data_limite_conclusao" value="{{ $tarefa->data_limite_conclusao ?? old('data_limite_conclusao') }}">
                            {{ $errors->has('data_limite_conclusao') ? $errors->first('data_limite_conclusao') : '' }}
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                        <a href="{{ url()->previous() }}" class="btn btn-primary">Voltar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection