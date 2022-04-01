@extends('app')
@section('title', 'Detalhes do Estudante')
@section('content')
        <div class="card">
            <div class="card-header">
                Detalhes do Estudante: {{$estudantes->nome}}
            </div>
            <div class="card-body">
                <p><strong>ID</strong>{{ $estudantes->id }}</p>
                <p><strong>Nome</strong>{{ $estudantes->nome }}</p>
                <p><strong>CPF</strong>{{ $estudantes->cpf }}</p>
                <p><strong>Nascimento</strong>{{ $estudantes->nascimento }}</p>
                <p><strong>Sala</strong>{{$estudantes->sala}}</p>

                <a class="btn btn-success" href="{{ route('estudantes.index')}}">Voltar para a lista de estudantes</a>

            </div>

        </div>
@endsection