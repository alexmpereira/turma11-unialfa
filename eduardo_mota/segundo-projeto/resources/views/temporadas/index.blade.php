@extends('app')
@section('title', 'Series')
@section('cabecalho')
    Temporadas de {{ $serie->nome }}
@section('content')
   

    
    <ul class="list-group">
        @foreach($temporadas as $temporada)
            <li class="list-group-item d-flex justify-content-between align-items">
                <a href="/temporadas/{{ $temporada->id }}/episodios">
                    Temporada {{ $temporada->numero }}
                </a>
                <span class="badage bg-secundary">
                    {{  $temporada->getEpisodiosAssistido()->count() }} / {{ $temporada->episodios->count() }}
                </span>
            </li>
        @endforeach
    </ul>

    
@endsection