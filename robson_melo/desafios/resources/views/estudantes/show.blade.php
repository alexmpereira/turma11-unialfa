@extends('app')
@section('title', 'Detalhes')
@section('content')
        <div class="card">
            <div class="card-header">
                Detalhes do Estudante: {{$estudantes->nome}}
            </div>
            <div class="card-body">
                <p><strong>ID</strong>{{ $estudantes->id }}</p>
                <p><strong>Nome</strong>{{ $estudantes->nome }}</p>
                <p><strong>cpf</strong>{{ $estudantes->cpf }}</p>
                <p><strong>Nascimento</strong>{{ $estudantes->nascimento }}</p>

                <a class="btn btn-success" href="{{ route('estudantes.index')}}">Voltar</a>

            </div>

        </div>
@endsection
