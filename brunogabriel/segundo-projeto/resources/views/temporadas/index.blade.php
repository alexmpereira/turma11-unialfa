@extends('layout')

@section('title', 'Temporadas')

@section('cabecalho')
    Temporadas de {{$serie->nome}}
@endsection

@section('conteudo')

    <ul class="list-group">
        @foreach ($temporadas as $temporada)
            <li class="list-group-item">Temporada: {{$temporada->numero}}</li>
        @endforeach
    </ul>

@endsection
