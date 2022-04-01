@extends('app')
@section('title', 'Novo Estudante')

@section('content')
    <h1>Novo Estudante</h1>
    <form action="{{ route('estudantes.store') }}" method="POST">
    @csrf
        <div class="md-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome" required>
        </div>

        <div class="md-3">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Digite o cpf" required>
        </div>

        <div class="md-3">
            <label for="nascimento" class="form-label">Data de Nascimento</label>
            <input class="form-control" name="nascimento" id="nascimento" placeholder="1990-12-15"  required>
        </div>

        <button class="btn btn-success">Enviar</button>
    </form>
@endsection
