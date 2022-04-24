@extends('app')
@section('title', 'Detalhes do Estudante')
@section('content')
        <div class="card">
            <div class="card-header">
                Detalhes do Estudante: {{$estudante->nome}}
            </div>
            <div class="card-body">
                <p><strong>ID</strong>{{ $estudante->id }}</p>
                <p><strong>Nome</strong>{{ $estudante->nome }}</p>
                <p><strong>cpf</strong>{{ $estudante->cpf }}</p>
                <p><strong>Nascimento</strong>{{ $estudante->nascimento }}</p>

                <a class="btn btn-success" href="{{ route('estudante.index')}}">Voltar para a lista inicial</a>

            </div>

        </div>
@endsection