@extends('app')
<<<<<<< HEAD

@section('title', 'Client Detail')

@section('content')
    <div class="card">
        <div class="card-header">
            Detalhes do Cliente: {{ $client->name }}
        </div>

        <div class="card-body">
            <p><strong>ID</strong>: {{ $client->id }}</p>
            <p><strong>Name</strong>: {{ $client->name }}</p>
            <p><strong>Address</strong>: {{ $client->address }}</p>
            <p><strong>Observation</strong>: {{ $client->observation }}</p>
            <br>
            <a class="btn btn-success" href="{{ route('clients.index') }}">To Back</a>
        </div>
    </div>
@endsection

=======
@section('title', 'Detalhes do Cliente')
@section('content')
        <div class="card">
            <div class="card-header">
                Detalhes do Cliente: {{$client->nome}}
            </div>
            <div class="card-body">
                <p><strong>ID</strong>{{ $client->id }}</p>
                <p><strong>Nome</strong>{{ $client->nome }}</p>
                <p><strong>Endereço</strong>{{ $client->endereco }}</p>
                <p><strong>Observação</strong>{{ $client->observacao }}</p>

                <a class="btn btn-success" href="{{ route('clients.index')}}">Voltar para a lista de clientes</a>

            </div>

        </div>
@endsection
>>>>>>> dc6d2954af9e7d7d3fe3866d42dcdaed0a358a3f
