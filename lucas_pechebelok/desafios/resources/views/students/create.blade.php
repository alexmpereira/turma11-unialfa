@extends('app')
<<<<<<< HEAD

@section('title', 'Create Student')

@section('content')
    <h1>Create Student</h1>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Type your name">
        </div>
        <div class="mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input type="number" class="form-control" name="cpf" id="cpf" placeholder="Type your cpf">
        </div>
        <div class="mb-3">
            <label for="birthdate" class="form-label">Birthdate</label>
            <input type="date" class="form-control" name="birthdate" id="birthdate" placeholder="Type your birthdate" />
        </div>

        <div class="d-flex">
            <button class="btn btn-success">Send</button>
            <a href="{{ route('students.index') }}" class="btn btn-danger ms-auto">Cancel</a>
        </div>
    </form>
@endsection
=======
@section('title', 'Novo Estudante')

@section('content')
<h1>Novo Estudante</h1>
<form action="{{ route('students.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome">
    </div>
    <div class="mb-3">
        <label for="cpf" class="form-label">CPF</label>
        <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Digite o CPF">
    </div>
    <div class="mb-3">
        <label for="nascimento" class="form-label">Data de nascimento</label>
        <input type="date" class="form-control" name="nascimento" id="nascimento">
    </div>

    <button class="btn btn-success">Enviar</button>
</form>
@endsection
>>>>>>> dc6d2954af9e7d7d3fe3866d42dcdaed0a358a3f
