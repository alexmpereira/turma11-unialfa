@extends('app')
<<<<<<< HEAD
@section('title', 'Edit Student')
@section('content')

    <h1>Edit Student</h1>
    <form action="{{ route('students.update', $student) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input value="{{ $student->name }}" type="text" class="form-control" name="name" id="name"
                placeholder="Type your name">
        </div>
        <div class="mb-3">
            <label for="cpf" class="form-label">CPF:</label>
            <input type="number" value="{{ $student->cpf }}" type="text" class="form-control" name="cpf" id="cpf"
                placeholder="Type your cpf">
        </div>
        <div class="mb-3">
            <label for="birthdate" class="form-label">Birthdate:</label>
            <input type="date" value="{{ $student->birthdate }}" class="form-control" name="birthdate" id="birthdate"
                placeholder="Type your birthdate">
        </div>

        <button class="btn btn-success">Send</button>
    </form>
@endsection
=======
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
>>>>>>> dc6d2954af9e7d7d3fe3866d42dcdaed0a358a3f
