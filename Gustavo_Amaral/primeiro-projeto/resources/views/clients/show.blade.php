@extends('app')
@section('title', 'detalhes do cliente')

@section('content')
        <div class="card">
            <div class="card-header">
                Detalhes do cliente {{ $client->nome }}
            </div>

            <div class="card-body">
                <p><strong>ID</strong>: {{ $client->id }}</p>
                <p><strong>Nome</strong>: {{ $client->nome }}</p>
                <p><strong>Endereço</strong>: {{ $client->endereco }}</p>
                <p><strong>Observação</strong>: {{ $client->observacao }}</p>
                <p><strong>Ação</strong>: {{ $client->acao }}</p>
                <br>
                <a class="btn btn-success" href="{{ route('clients.index') }}">
                    Voltar para a lista de cliente
                </a>
                <p><strong></strong></p>
            </div>
        </div>
@endsection