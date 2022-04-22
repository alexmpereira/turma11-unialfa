@extends('app')
@section('title', 'Detalhes do Estudante')
@section('content')
        <div class="card">
            <div class="card-header">
                <h5>Detalhes do Estudante: {{$estudantes->nome}}</h5>
            </div>
            <div class="card-body">
                <p><strong>ID: </strong>{{ $estudantes->id }}</p>
                <p><strong>Nome: </strong>{{ $estudantes->nome }}</p>
                <p><strong>CPF: </strong>{{ $estudantes->cpf }}</p>
                <p><strong>Nascimento: </strong>{{ $estudantes->nascimento }}</p>
                <p><strong>Sala: </strong>{{$estudantes->sala}}</p>

                <a class="btn btn-warning" href="{{ route('estudantes.index')}}">Voltar</a>

            </div>

        </div>
@endsection
