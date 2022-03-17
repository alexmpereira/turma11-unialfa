@extends('app')
@section('title', 'lista de clientes')
@section('content')


    <div class="container">
        <h1>Lista de clientes:</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome:</th>
                    <th scope="col">Endereco:</th>
                    <th scope="col">Acoes</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    <tr>
                        <th scope="row">{{ $client->id }}</th>
                        <td>
                            <a href="{{ route('clients.show', $client) }}">{{ $client->nome }}</a>
                        </td>
                        <td>{{ $client->endereco }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
