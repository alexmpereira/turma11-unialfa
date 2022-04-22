@extends('app')
@section('title', 'Novo Estudante')

@section('content')
<h1>Editar Estudante</h1>
<form action="{{ route('students.update', $student) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input value="{{ $student->nome }}" type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome">
    </div>
    <div class="mb-3">
        <label for="cpf" class="form-label">CPF</label>
        <input value="{{ $student->cpf }}" type="text" class="form-control" name="cpf" id="cpf" placeholder="Digite o CPF">
    </div>
    <div class="mb-3">
        <label for="observacao" class="form-label">Data de nascimento</label>
        <input value="{{ $student->nascimento }}" type="date" class="form-control" name="nascimento" id="nascimento">
    </div>

    <button class="btn btn-success">Editar</button>
</form>
@endsection