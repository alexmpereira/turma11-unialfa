@extends('app')

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
            <a class="btn btn-success" href="{{ route('clients.index') }}">Voltar</a>
        </div>
    </div>
@endsection

