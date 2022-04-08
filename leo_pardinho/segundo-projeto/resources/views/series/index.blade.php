@extends('app')
@section('conteudo')
<h1 style="font-family: 'Bebas Neue', cursive; margin-top: 1rem;">LISTA DE SÉRIES</h1>

<ul class="list-group">
    @foreach ($series as $serie)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{$serie->nome}}
        </li>
    @endforeach
</ul>

<a href="{{route('serie.create')}}" class="btn btn-danger mb-2" style="margin-top: 1rem;">
    Adicionar
</a>


@endsection