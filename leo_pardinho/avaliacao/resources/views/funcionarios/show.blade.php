@extends('app')
@section('title', 'Detalhes do Funcionário')
@section('content')

        <div class="card">
            <div class="card-header">
                <strong>Informações:</strong> {{$funcionarios->nome}}
            </div>
            <div class="card-body">

                <p><strong class="text-secondary">ID: </strong>{{ $funcionarios->id }}</p>
                <p><strong class="text-secondary">Nome: </strong>{{ $funcionarios->nome }}</p>
                <p><strong class="text-secondary">Cargo: </strong>{{ $funcionarios->cargo }}</p>
                <p><strong class="text-secondary">Salário: </strong>{{ $funcionarios->salario }}</p>
                <p><strong class="text-secondary">Data de Entrada: </strong>{{ $funcionarios->data_entrada }}</p>


                <a class="btn btn-outline-info" href="{{ route('funcionarios.index')}}">Voltar</a>
            </div>

        </div>
@endsection
