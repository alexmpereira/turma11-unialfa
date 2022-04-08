@extends('layout')

@section('cabecalho')
Adicionar Série
@endsection

@section('conteudo')
<a href="{{ route('series.index') }}" class="btn btn-dark mb-2">Voltar</a>

<form method="POST">
    @csrf
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome">
    </div>

    <button class="btn btn-primary">Adicionar</button>
</form>
@endsection