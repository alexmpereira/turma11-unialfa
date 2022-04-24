@extends('app')
@section('title', 'Series')
@section('cabecalho','Netflix')
@section('content')
    <h1>Series Disponiveis</h1>
    
    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $serie->nome }}
            </li>
        @endforeach
    </ul>

    <a class="btn btn-dark mb-2" href="{{ route('series.create') }}">Adicionar Serie</a>
@endsection