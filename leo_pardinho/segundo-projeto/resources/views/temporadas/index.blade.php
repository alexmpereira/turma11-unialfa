@extends('app')

@section('conteudo')
<h1>Temporadas de {{$serie->nome}}</h1>
<ul>
    @foreach ($temporadas as $temporada)
    <li class="">
        Temporada: {{$temporada->numero}}
    </li>
    @endforeach
</ul>
@endsection