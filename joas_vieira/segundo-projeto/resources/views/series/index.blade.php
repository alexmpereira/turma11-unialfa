@extends('app')

@section('title', 'Lista de Series')

@section('content')
    <h1>Lista de Series</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($series as $serie)
                <tr>
                    <th scope="row">{{ $serie->id }}</th>
                    <td>
                        {{ $serie->nome }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a class='btn btn-success' href="{{ route('series.create') }}">New Student</a>

@endsection
