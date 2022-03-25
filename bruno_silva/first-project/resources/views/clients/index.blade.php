@extends('app')
@section('title', 'lista de clientes')
@section('content')


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
                    <td>
                        <a class="btn btn-primary" href="{{ route('clients.edit', $client) }}">Editar</a>
                        <form action="{{ route('clients.destroy', $client) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type='submit' onclick="return confirm('Tem ceteza que deseja apagar?')">Apagar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a class="btn btn-success" href="{{ route('clients.create') }}">
        Novo Cliente
    </a>

@endsection
