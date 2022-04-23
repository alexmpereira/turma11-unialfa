@extends('app')
@section('title', 'Edit')
@section('content')

        <h1>Editar Estudante</h1>
        <form action="{{ route('estudantes.update', $estudantes)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input value="{{ $estudantes->nome }}" type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome" required>
            </div>
            <div class="mb-3">
                <label for="cpf" class="form-label">cpf:</label>
                <input value="{{ $estudantes->cpf }}" type="text" class="form-control" name="cpf" id="cpf" placeholder="Digite seu Cpf" required>
            </div>
            <div class="mb-3">
                <label for="nascimento" class="form-label">nascimento:</label>
                <input value="{{ $estudantes->nascimento }}" type="date" class="form-control" name="nascimento" id="nascimento" placeholder="Digite seu nascimento" required>
            </div>

            <button class="btn btn-success">Enviar</button>
        </form>
@endsection
