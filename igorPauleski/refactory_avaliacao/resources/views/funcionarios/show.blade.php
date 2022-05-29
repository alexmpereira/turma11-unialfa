@extends('app')

@section('title', 'Detalhes do Funcionário')

@section('content')

        <div class="card">
            <div class="card-header">
                Detalhes do Funcionário: {{$funcionarios->nome}}
            </div>
            <div class="card-body">
                <p><strong>ID: </strong>{{ $funcionarios->id }}</p>
                <p><strong>Nome: </strong>{{ $funcionarios->nome }}</p>
                <p><strong>Cargo: </strong>{{ $funcionarios->cargo }}</p>
                <p><strong>Salário: </strong>{{ $funcionarios->salario }}</p>
                <p><strong>Data de entrada: </strong>{{ $funcionarios->data_entrada }}</p>

                <a class="btn btn-success" href="{{ route('funcionarios.index')}}">Voltar</a>

            </div>

        </div>

@endsection
