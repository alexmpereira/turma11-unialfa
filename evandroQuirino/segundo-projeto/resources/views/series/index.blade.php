@extends('app')

@section('title', 'Lista de Series')

@section('content')

    @if (!empty($mensagem))
        <div class="alert alert-success">{{$mensagem}}</div>
    @endif

    <h1>Lista de Series</h1>
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
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a class='btn btn-success' href="{{ route('series.create') }}">Nova Serie</a>

@endsection
