@extends('app')
@section('title', 'Detalhes do funcionario')
@section('content')
        <div class="card">
            <div class="card-header">
                Detalhes do Funcionario: {{$funcionario->nome}}
            </div>
            <div class="card-body">
                <p><strong>Nome</strong>{{ $funcionario->nome }}</p>
                <p><strong>Endereço</strong>{{ $funcionario->cargo }}</p>
                <p><strong>Observação</strong>{{ $funcionario->salario }}</p>
                <p><strong>Observação</strong>{{ $funcionario->data_entrada }}</p>

                <a class="btn btn-success" href="{{ route('funcionarios.index')}}">Voltar </a>

            </div>

        </div>
@endsection