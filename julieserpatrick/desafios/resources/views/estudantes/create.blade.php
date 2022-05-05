@extends('app')
@section('title', 'Novo Estudante')
@section('content')

        <h1>Novo Estudante</h1>
        <form action="{{ route('estudantes.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome" required>
            </div>
            <div class="mb-3">
                <label for="cpf" class="form-label">CPF:</label>
                <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Digite o Cpf" required>
            </div>
            <div class="mb-3">
                <label for="nascimento" class="form-label">Data de Nacimento:</label>
                <input type="date" class="form-control" name="nascimento" id="nascimento" placeholder="Digite a data de nascimento" required></textarea>
            </div>
            <div class="mb-3">
                <label for="sala_id" class="form-label">Sala:</label>
                <input type="number" class="form-control" name="sala_id" id="sala_id" placeholder="Digite A sala" required>
            </div>

            <button class="btn btn-success">Enviar</button>
        </form>
@endsection
