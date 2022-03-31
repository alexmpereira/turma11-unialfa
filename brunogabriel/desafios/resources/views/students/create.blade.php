@extends('app')
@section('title', 'Novo estudante')

@section('content')
  <h1>Novo Estudante</h1>
  <form action="{{route('students.store')}}" method="POST">
      @csrf
      <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome" required>
      </div>

      <div class="mb-3">
        <label for="cpf" class="form-label">CPF</label>
        <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Digite o CPF" required>
      </div>

      <div class="mb-3">
        <label for="nascimento" class="form-label">Data de Nascimento</label>
        <input type="date" class="form-control" name="nascimento" id="nascimento" placeholder="Digite a data de nascimento" required>
      </div>

      <button class="btn btn-success">Cadastrar</button>
  </form>    
@endsection       