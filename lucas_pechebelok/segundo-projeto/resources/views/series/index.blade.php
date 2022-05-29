@extends('app')

@section('title', 'Lista de Series')

@section('content')
<<<<<<< HEAD

    @if (!empty($mensagem))
        <div class="alert alert-success">{{$mensagem}}</div>
    @endif

    <h1>Lista de Series</h1>
=======
    <h1>Lista de séries</h1>
>>>>>>> dc6d2954af9e7d7d3fe3866d42dcdaed0a358a3f
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
<<<<<<< HEAD
                        <span class="d-flex">
                            <a class="btn btn-info btn-sm me-1" href="{{ route('temporadas.index', $serie->id) }}">Temporadas</a>
                            <form action="{{ route('series.destroy', $serie) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit"
                                    onclick="return confirm('Are you sure you want to delete?')">
                                    Delete
                                </button>
                            </form>
                        </span>
=======
                        <form action="{{ route('series.destroy', $serie) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit"
                                onclick="return confirm('Deseja deleta a série?')">
                                Delete
                            </button>
                        </form>
>>>>>>> dc6d2954af9e7d7d3fe3866d42dcdaed0a358a3f
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

<<<<<<< HEAD
    <a class='btn btn-success' href="{{ route('series.create') }}">New Serie</a>
=======
    <a class='btn btn-success' href="{{ route('series.create') }}">Nova série</a>
>>>>>>> dc6d2954af9e7d7d3fe3866d42dcdaed0a358a3f

@endsection
