@extends('app')
@section('title', 'Novo Funcionário')

@section('content')
  <h1>Novo Funcionário</h1>
  <form action="{{route('funcionarios.store')}}" method="POST">
      @csrf
      <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome" required>
      </div>

      <div class="mb-3">
        <label for="cargo" class="form-label">Cargo</label>
        <input type="text" class="form-control" name="cargo" id="cargo" placeholder="Digite o Cargo" required>
      </div>

      <div class="mb-3">
        <label for="salario" class="form-label">Salário</label>
        <input type="number" class="form-control" name="salario" id="salario" placeholder="Digite o Salário" required>
      </div>

      <div class="mb-3">
        <label for="data_entrada" class="form-label">Data de Entrada</label>
        <input type="date" class="form-control" name="data_entrada" id="data_entrada" placeholder="Digite a Data de Entrada" required>
      </div>

      <button class="btn btn-success">Enviar</button>
  </form>
@endsection
