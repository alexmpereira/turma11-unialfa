@extends('app')
@section('title', 'Detalhes do Estudante')

@section('content')
    <div class="card">
        <div class="card-header">
            Detalhes do Estudante {{ $estudante->nome }}
        </div>

        <div class="card-body">
            <p><strong>Nome</strong>: {{ $estudante->nome }}</p>
            <p><strong>CPF</strong>: {{ $estudante->cpf }}</p>
            <p><strong>Data Nascimento</strong>: {{ $estudante->nascimento }}</p>
            <br>
            <a class="btn btn-success" href="{{ route('estudantes.index') }}">
                Voltar para a lista de estudantes
            </a>
        </div>
    </div>
@endsection
