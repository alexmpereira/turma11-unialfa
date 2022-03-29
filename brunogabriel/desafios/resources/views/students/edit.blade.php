@extends('app')
@section('title', 'Editar Estudante')

@section('content')
  <h1>Editar Estudante</h1>
  <form action="{{route('students.update', $student)}}" method="POST">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input value="{{$student->nome}}" type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome" required>
      </div>

      <div class="mb-3">
        <label for="cpf" class="form-label">CPF</label>
        <input value="{{$student->cpf}}" type="text" class="form-control" name="cpf" id="cpf" placeholder="Digite o CPF" required>
      </div>

      <div class="mb-3">
        <label for="nascimento" class="form-label">Data de Nascimento</label>
        <input value="{{$student->nascimento}}" type="date" class="form-control" name="nascimento" id="nascimento" placeholder="Digite a data de nascimento" required >
      </div>

      <button class="btn btn-success">Editar</button>
  </form>    
@endsection       