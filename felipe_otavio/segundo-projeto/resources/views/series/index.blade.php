@extends('layout')

@section('cabecalho')
Séries
@endsection

@section('conteudo')

@if (!@empty($mensagem))
<div class="alet alert-success">
    {{ $mensagem }}
</div>
@endif

<a href="{{ route('series.create') }}" class="btn btn-dark mb-2">Adicionar</a>

<ul class="list-group">
    @foreach ($series as $serie)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $serie->nome }}
            <form action="/series/{{ $serie->id}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">
                    EXCLUIR
                </button>
            </form>
        </li>
    @endforeach
</ul>
@endsection
