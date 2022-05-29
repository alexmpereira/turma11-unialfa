@extends('layouts.app')
@section('title', 'Nova Filial')

@section('content')
    <h1 class="ml-3">Nova Filial</h1>
    <form action="{{ route('filial.store') }}" method="POST" class="p-5">
    @csrf
        <div class="md-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome_filial" id="nome_filial" placeholder="Digite o nome da filial" required>
        </div>

        <div class="md-3">
            <label for="regiao" class="form-label">Região</label>
            <input type="text" class="form-control" name="regiao" id="regiao" placeholder="Digite a regiao" required>
        </div>

        <div class="md-3">
            <label for="data_criacao" class="form-label">Data de Criação</label>
            <input class="form-control" name="data_criacao" id="data_criacao" type="date" placeholder="digite a data de criação"  required>
        </div>
       
        <button class="btn btn-success">Enviar</button>
    </form>
@endsection
