@extends('app')
@section('title', 'Series')
@section('cabecalho')
    Temporadas de {{ $serie->nome }}
@section('content')
   

    
    <ul class="list-group">
        @foreach($temporadas as $temporada)
            <li class="">
                Temporada: {{ $temporada->numero }}
            </li>
        @endforeach
    </ul>

    
@endsection