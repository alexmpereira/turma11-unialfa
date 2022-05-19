@extends('layout')

@section('title', 'Temporadas')

@section('cabecalho')
    Temporadas de {{$serie->nome}}
@endsection

@section('conteudo')
    <a href="{{route('series.index')}}" class="btn btn-dark mb-2">Voltar</a>
    <ul class="list-group">
        @foreach ($temporadas as $temporada)
            <li class="list-group-item">Temporada: {{$temporada->numero}}</li>
        @endforeach
    </ul>

@endsection
