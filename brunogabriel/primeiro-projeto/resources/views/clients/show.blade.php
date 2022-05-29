@extends('app')
@section('content')
    <div class='card'>
        <div class="card-header">
            Detalhes do cliente {{ $client->nome }}
        </div>
        <div class="card-body">
            <p><strong>ID</strong> {{ $client->id }} </p>
            <p><strong>Nome</strong>{{ $client->nome }}</p>
            <p><strong>Endereco</strong>{{ $client->endereco }}</p>
            <p><strong>Observacao</strong>{{ $client->observacao }}</p>
            <br>
            <a class="btn btn-success" href="{{ route('clients.index') }}">Voltar a lista de clientes</a>
        </div>
    </div>
@endsection
