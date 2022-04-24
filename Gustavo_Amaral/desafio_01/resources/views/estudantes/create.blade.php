@extends('app')
@section('title', 'Novo Estudante')

@section('content')
       <h1>Cadastro Estudante</h1>
       <form action="{{ route('estudantes.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome"
                placeholder="Digite um nome" required>
            </div>

            <div class="mb-3">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" class="form-control" name="cpf" id="cpf"
                placeholder="Digite um cpf" required>
            </div>

            <div class="mb-3">
                <label for="nascimento" class="form-label">Nascimento</label>
                <input type="text" class="form-control" name="nascimento" id="nascimento"
                placeholder="Digite a data de nascimento" required>
            </div>

            <button class="btn btn-success">Enviar</button>
       </form>
@endsection