@extends('app')
@section('title', 'Novo cliente')
    

@section('content')
    <h1>Editar Estudante</h1>
    <form action="{{ route('estudantes.update', $estudantes) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" value="{{$estudantes->nome }}" class="form-control" name="nome" id="nome" placeholder="Digite o nome"required>
        </div>

        <div class="mb-3">
            <label for="cpf" class="form-label">cpf</label>
            <input type="text" value="{{$estudantes->cpf}}" class="form-control" name="cpf" id="cpf" placeholder="Digite o cpf" required>
        </div>

        <div class="mb-3">
            <label for="nascimento" class="form-label">nascimento</label>
            <input type="text" value="{{$estudantes->nascimento}}" class="form-control" name="nascimento" id="nascimento" placeholder="Digite a nascimento">
        </div>

        <div class="mb-3">
            <label for="sala_id" class="form-label">sala</label>
            <input type="number" value="{{$estudantes->sala_id}}" class="form-control" name="sala_id" id="sala_id" placeholder="Digite a sala">
        </div>

        <button class="btn btn-success">Enviar</button>
    </form>
@endsection