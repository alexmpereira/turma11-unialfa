@extends('layout')
@section('title', 'Nova Série')

@section('cabecalho')
    Adicionar Série
@endsection

@section('conteudo')

    <a href="{{ route('series.index') }}" class="btn btn-dark md-2 mt-2 ">Voltar</a>

    <h1>Nova Série</h1>
    <form action="{{ route('series.store') }}" method="POST">
    @csrf
        <div class="md-3">
            <label for="nome" class="form-label">Nome da Série:</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome da série" required>
        </div>

        <button class="btn btn-success">Enviar</button>
    </form>
@endsection