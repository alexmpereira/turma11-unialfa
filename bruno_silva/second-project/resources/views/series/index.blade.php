@extends('layout')
@section('cabecalho', 'Séries')
@section('conteudo')
    <a href="{{ route('series.create') }}" class="btn btn-dark mb-2">Adicionar</a>
    <ul class="list-group">

        @foreach ($series as $serie)
            <li onclick="window.location='{{ route('series.edit', $serie) }}'" class="list-group-item d-flex justify-content-between align-items-center">
                {{ $serie->nome }}
            </li>
    </ul>
    @endforeach
@endsection
