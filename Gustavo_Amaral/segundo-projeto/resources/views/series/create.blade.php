@extends('layout')

@section('cabecalho')
    Cadastro Serie

@endsection

@section('conteudo')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @@foreach ($errors->all() as error)
        <li>{{ $error }}</li>
    </ul>
</div>
@endif

    <a href="{{ route('series.index') }}" class="btn btn-dark mb-2">Voltar</a>

    <form action="{{ route('series.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" id="titulo" placeholder="Digite um Titulo" required>
        </div>

        <button class="btn btn-primary">Adicionar</button>
    </form>
@endsection