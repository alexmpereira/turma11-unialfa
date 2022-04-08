@extends('layout')

@section('title', 'Séries')
@section('cabecalho', 'Séries')

@section('conteudo')
<a href="{{route('series.create')}}" class="btn btn-dark mb-2">Adicionar</a>

<ul class="list-group">
    @foreach ($series as $serie)
        <li class="list-group-item d-flex justify-content-between aling-items-center">
            {{ $serie->nome }}
        </li>
    @endforeach
</ul>
@endsection