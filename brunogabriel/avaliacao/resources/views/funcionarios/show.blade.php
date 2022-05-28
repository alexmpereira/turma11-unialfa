@extends('app')
@section('title', 'Detalhes do Funcionario')

@section('content')
  <div class="card">
        <div class="card-header">
            Detalhes do Funcionário {{ $funcionario->nome }}
        </div>

        <div class="card-body">
            <p><strong>ID</strong>: {{ $funcionario->id }}</p>
            <p><strong>Nome</strong>: {{ $funcionario->nome }}</p>
            <p><strong>Cargo</strong>: {{ $funcionario->cargo }}</p>
            <p><strong>Salário</strong>: {{ $funcionario->salario }}</p>
            <p><strong>Data de Entrada</strong>: {{ $funcionario->data_entrada }}</p>
            <br>
            <a class="btn btn-success" href="{{ route('funcionarios.index') }}">
                Voltar para a lista de Funcionários
            </a>
        </div>
  </div>
@endsection
