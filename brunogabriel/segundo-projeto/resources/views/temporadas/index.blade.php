@extends('layout')

@section('title', 'Temporadas')

@section('cabecalho')
    Temporadas de {{$serie->nome}}
@endsection

@section('conteudo')
    <a href="{{route('series.index')}}" class="btn btn-dark mb-2">Voltar</a>
    <ul class="list-group">
        @foreach ($temporadas as $temporada)
            <li class="list-group-item d-flex justify-content-between align-items">
                <a href="/temporadas/{{$temporada->id}}/episodios">
                    Temporada {{$temporada->numero}}
                </a>
                <span class="badge bg-secundary">
                    {{$temporada->getEpisodiosAssistidos()->count()}} / {{$temporada->episodios->count()}}
                </span>
            </li>
        @endforeach
    </ul>

@endsection
