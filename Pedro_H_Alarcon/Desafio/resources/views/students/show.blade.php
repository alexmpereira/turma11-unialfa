@extends('app')
@section('title', 'Detalhes do Estudante')
@section('content')

        <div class="card">
            <div class="card-header">
                Detalhes do Estudante: {{$student->nome}}
            </div>
            <div class="card-body">
                <p><strong>ID: </strong>{{ $student->id }}</p>
                <p><strong>Nome: </strong>{{ $student->nome }}</p>
                <p><strong>CPF: </strong>{{ $student->cpf }}</p>
                <p><strong>Nascimento: </strong>{{ $student->nascimento }}</p>

                <a class="btn btn-success" href="{{ route('student.index')}}">Voltar para a lista de clientes</a>

            </div>

        </div>
@endsection
