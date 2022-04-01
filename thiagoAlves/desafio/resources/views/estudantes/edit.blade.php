@extends('app')
@section('title', 'Novo Estudante')
@section('content')

        <h1>Editar Estudante</h1>
        <form action="{{ route('estudantes.update', $estudante)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input value="{{ $estudante->nome }}" type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome">
            </div>
            <div class="mb-3">
                <label for="cpf" class="form-label">CPF:</label>
                <input value="{{ $estudante->cpf }}" type="number" class="form-control" name="cpf" id="cpf" placeholder="Digite o cpf">
            </div>
            <div class="mb-3">
                <label for="nascimento" class="form-label">Nascimento:</label>
                <input value="{{ $estudante->nascimento }}" type="date" class="form-control" name="nascimento" id="nascimento" placeholder="Digite a data de nascimento">

            </div>

            <button class="btn btn-success">Enviar</button>
        </form>
@endsection
