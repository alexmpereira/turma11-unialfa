@extends('app')
@section('title', 'Detalhes do cliente')

@section('content')
    <div class="card">
        <div class="card-header">
            Detalhes do Cliente {{$client->nome}}
        </div>
        <div class="card-body">
            <p><strong>ID</strong>:{{$client->id}}</p>
            <p><strong>Nome</strong>:{{$client->nome}}</p>
            <p><strong>Endereço</strong>:{{$client->endereço}}</p>
            <p><strong>Observação</strong>:{{$client->observacao}}</p>
            <br>
            <a class="btn btn-success" href="{{route('clients.index')}}">Voltar para a lista de Clientes</a>
        </div>
    </div>
@endsection
