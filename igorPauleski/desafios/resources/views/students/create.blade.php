@extends('app')
@section('title', 'Novo Estudante')

@section('content')
    <h1>Novo Estudante</h1>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o NOME">
        </div>
        <div class="mb-3">
            <label for="cpf" class="form-label">Cpf</label>
            <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Digite o CPF">
        </div>
        <div class="mb-3">
            <label for="nascimento" class="form-label">Data Nascimento</label>
            <input type="date" class="form-control" name="nascimento" id="nascimento">
        </div>

        <button class="btn btn-success">Enviar</button>
    </form>
@endsection
