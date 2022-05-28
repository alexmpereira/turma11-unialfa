@extends('app')

@section('conteudo')
<h1>Temporadas de {{$serie->nome}}</h1>

<ul>

    @foreach ($temporadas as $temporada)
        <li class="list-group-item d-flex justfy-content-between align-items">
            <a href="/temporadas/{{ $temporada->id }}/episodios">
                Temporada {{ $temporada->numero }}
            </a>
            <span class="badge bg-secondary" style="margin-left: 1rem;">
                {{ $temporada->getEpisodiosAssistidos()->count() }} / {{ $temporada->episodios->count() }}
            </span>
        </li>
    @endforeach
</ul>
@endsection