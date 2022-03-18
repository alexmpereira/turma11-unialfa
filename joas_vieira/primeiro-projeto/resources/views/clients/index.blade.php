@extends('app')

@section('title', 'Client list')

@section('content')
    <h1>Client List</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
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
            @endforeach
        </tbody>
    </table>

    <a class= 'btn btn-success' href="{{ route('clients.create') }}">New Client</a>
@endsection
