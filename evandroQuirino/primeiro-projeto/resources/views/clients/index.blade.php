@extends('app')
@section('title', 'Lista de clientes')
@section('content')
    <h1>Lista de Clientes</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Endereço</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
            
                <tr>
                    <th scope="row">{{ $client->id }}</th>
                    <td>
                        <a href="{{ route('clients.show', $client) }}">
                            {{ $client->nome }}
                        </a></td>
                    <td>{{ $client->endereco }}</td>
                    <td style="display: flex" >
                        <a href="{{ route('clients.edit', $client) }}" class="btn btn-warning">
                            Editar
                        </a>

                        <form action="{{ route('clients.destroy', $client) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button 
                            type="submit" 
                            class="btn btn-danger" 
                            onclick="return confirm('tem certeza que deseja apagar?')">
                                Excluir
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a class="btn btn-success" href="{{ route('clients.create') }}">Novo Cliente</a>
@endsection

