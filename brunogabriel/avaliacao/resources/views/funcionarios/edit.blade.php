@extends('app')
@section('title', 'Editar Funcionarios')

@section('content')
  <h1>Editar Funcionário</h1>
  <form action="{{route('funcionarios.update', $funcionario)}}" method="POST">
      @csrf
      @method('PUT')
      <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input value="{{$funcionario->nome}}" type="text" class="form-control" name="nome" id="nome" placeholder="Digite o Nome" required>
      </div>

      <div class="mb-3">
        <label for="cargo" class="form-label">Cargo</label>
        <input value="{{$funcionario->cargo}}" type="text" class="form-control" name="cargo" id="cargo" placeholder="Digite o Cargo" required>
      </div>

      <div class="mb-3">
        <label for="salario" class="form-label">Salário</label>
        <input value="{{$funcionario->salario}}" type="number" class="form-control" name="salario" id="salario" placeholder="Digite o Salario" required>
      </div>

      <div class="mb-3">
        <label for="data_entrada" class="form-label">Data de Entrada</label>
        <input value="{{$funcionario->data_entrada}}" type="date" class="form-control" name="data_entrada" id="data_entrada" placeholder="Digite o data_entrada" required>
      </div>



      <button class="btn btn-success">Editar</button>
  </form>
@endsection
