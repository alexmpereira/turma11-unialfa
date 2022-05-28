@extends('layouts.app')
@section('title', 'Editar Filial')

@section('content')
    <h1 class="ml-3">Editando filial: {{ $filial->nome_filial }}</h1>
    <form action="{{ route('filial.update', $filial) }}" method="POST" class="p-5">
    @csrf
        @method('PUT')
        <div class="md-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" value="{{ $filial->nome_filial }}" class="form-control" name="nome_filial" id="nome_filial" placeholder="Digite o nome da filial" required>
        </div>

        <div class="md-3">
            <label for="regiao" class="form-label">Região</label>
            <input type="text" value="{{ $filial->regiao }}" class="form-control" name="regiao" id="regiao" placeholder="Digite a regiao" required>
        </div>

        <div class="md-3">
            <label for="data_criacao" class="form-label">Data de Criação</label>
            <input class="form-control" value="{{ $filial->data_criacao }}" name="data_criacao" id="data_criacao" type="date" placeholder="digite a data de criação"  required>
        </div>
       
        <button class="btn btn-success">Enviar</button>
    </form>
@endsection
