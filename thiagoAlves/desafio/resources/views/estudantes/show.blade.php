@extends('app')
@section('title', 'Detalhes do estudantee')
@section('content')

        <div class="card">
            <div class="card-header">
                Detalhes do estudantee: {{$estudante->nome}}
            </div>
            <div class="card-body">
                <p><strong>ID: </strong>{{ $estudante->id }}</p>
                <p><strong>Nome: </strong>{{ $estudante->nome }}</p>
                <p><strong>Endereço: </strong>{{ $estudante->cpf }}</p>
                <p><strong>Observação: </strong>{{ $estudante->nascimento }}</p>

                <a class="btn btn-success" href="{{ route('estudantes.index')}}">Voltar para a lista de estudantees</a>

            </div>

        </div>
@endsection
