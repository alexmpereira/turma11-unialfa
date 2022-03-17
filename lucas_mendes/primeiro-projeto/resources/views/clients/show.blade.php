@extends('app')
@section('title', 'Detalhes do cliente')
    

@section('content')
    <div class='card'>
        <div class='card-header'>
            detalhes do Cliente {{$client->nome}}
        </div>
    </div>

    <div class='card-body'>
        <p><strong>ID</strong>: {{$client->id}}</p>
        <p><strong>Nome</strong>: {{$client->nome}}</p>
        <p><strong>Endereco</strong>: {{$client->endereco}}</p>
        <p><strong>Observacao</strong>: {{$client->Observacao}}</p>
        <br>
        <a class='btn btn-success' href="{{route('clients.index')}}">
            Voltar para a lista de clientes
        </a>
    </div>
@endsection