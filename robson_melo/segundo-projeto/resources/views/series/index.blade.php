@extends('layout')

@section('cabecalho')
Séries
@endsection

@section('conteudo')
<a href="#" class="btn btn-dark mb-2">Adicionar</a>

<ul class="list-group">
    @foreach($series as $serie)
    <li class="list-group-item d-flex justify-content-between align-items-center">
        {{$serie->name}}
    </li>
    @endforeach
</ul>
@endsection
