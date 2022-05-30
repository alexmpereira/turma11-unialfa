@extends('app')
<<<<<<< HEAD

@section('title', 'Client list')

@section('content')
    <h1>Client List</h1>
=======
@section('title', 'Lista de Clientes')
@section('content')
    <h1>Lista de Clientes</h1>
>>>>>>> dc6d2954af9e7d7d3fe3866d42dcdaed0a358a3f
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
<<<<<<< HEAD
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Actions</th>
=======
                <th scope="col">Nome</th>
                <th scope="col">Endereço</th>
                <th scope="col">Ações</th>
>>>>>>> dc6d2954af9e7d7d3fe3866d42dcdaed0a358a3f
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
<<<<<<< HEAD
                <tr>
                    <th scope="row">{{ $client->id }}</th>
                    <td>
                        <a href="{{ route('clients.show', $client) }}">
                            {{ $client->name }}
                        </a>
                    </td>
                    <td>{{ $client->address }}</td>
                    <td></td>
                </tr>
=======
            <tr>
                <th scope="row">{{$client->id}}</th>
                <td>
                    <a href="{{ route('clients.show', $client) }}">{{$client->nome}}</a>
                </td>
                <td>{{$client->endereco}}</td>
                <td>
                    <a 
                        class="btn btn-primary" 
                        href="{{ route('clients.edit', $client) }}"
                    >
                        Atualizar
                    </a>

                    <form action="{{ route('clients.destroy', $client) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button
                            class="btn btn-danger"
                            type="submit"
                            onclick="return confirm('Tem certeza que deseja apagar?')"
                        >
                            Apagar
                        </button>
                    </form>
                </td>
            </tr>
>>>>>>> dc6d2954af9e7d7d3fe3866d42dcdaed0a358a3f
            @endforeach
        </tbody>
    </table>

<<<<<<< HEAD
    <a class= 'btn btn-success' href="{{ route('clients.create') }}">New Client</a>
@endsection
=======
    <a class="btn btn-success" href="{{ route('clients.create')}}">Novo Cliente</a>
@endsection
>>>>>>> dc6d2954af9e7d7d3fe3866d42dcdaed0a358a3f
