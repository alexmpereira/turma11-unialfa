@extends('app')
@section('title', 'Detalhes do cliente')
    

@section('content')
    <div class='card'>
        <div class='card-header'>
            detalhes do estudante: {{$estudantes->nome}}
        </div>
    </div>

    <div class='card-body'>
        <p><strong>ID</strong>: {{$estudantes->id}}</p>
        <p><strong>Nome</strong>: {{$estudantes->nome}}</p>
        <p><strong>CPF</strong>: {{$estudantes->cpf}}</p>
        <p><strong>Nascimento</strong>: {{$estudantes->nascimento}}</p>
        <p><strong>Sala</strong>: {{$estudantes->sala_id}}</p>
        <br>
        <a class='btn btn-success' href="{{route('estudantes.index')}}">
            Voltar para a lista de estudantes
        </a>
    </div>
@endsection