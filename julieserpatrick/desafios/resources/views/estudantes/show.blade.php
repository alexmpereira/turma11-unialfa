@extends('app')
@section('title', 'Detalhes do Estudante')
@section('content')
        <div class="card">
            <div class="card-header">
                Detalhes do Estudante: {{$estudante->nome}}
            </div>
            <div class="card-body">
                <p><strong>ID: </strong>{{ $estudante->id }}</p>
                <p><strong>Nome: </strong>{{ $estudante->nome }}</p>
                <p><strong>CPF: </strong>{{ $estudante->cpf }}</p>
                <p><strong>Nascimento: </strong>{{ $estudante->nascimento }}</p>
                <p><strong>Sala: </strong>{{ $estudante->sala_id }}</p>

                <a class="btn btn-success" href="{{ route('estudantes.index')}}">Voltar para a lista de Estudantes</a>

            </div>

        </div>
@endsection
