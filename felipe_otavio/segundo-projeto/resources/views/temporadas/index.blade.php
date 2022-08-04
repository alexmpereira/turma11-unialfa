@extends('app')

@section('title', 'Temporadas')

@section('content')

    <h1>{{ $serie->nome }}</h1>

    <ul>
        @foreach ($temporadas as $temporada)
            <li class="list-group-item">Temporada: {{ $temporada->numero }}</li>
        @endforeach
    </ul>

@endsection
