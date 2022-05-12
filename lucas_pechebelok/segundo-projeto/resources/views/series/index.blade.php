@extends('app')

@section('title', 'Lista de Series')

@section('content')
    <h1>Lista de séries</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($series as $serie)
                <tr>
                    <th scope="row">{{ $serie->id }}</th>
                    <td>
                        {{ $serie->nome }}
                    </td>
                    <td>
                        <form action="{{ route('series.destroy', $serie) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit"
                                onclick="return confirm('Deseja deleta a série?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a class='btn btn-success' href="{{ route('series.create') }}">Nova série</a>

@endsection
