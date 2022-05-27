@extends('app')
@section('title', 'Series')
@section('cabecalho','Episodios')

@section('content')

    @if (!empty($mensagem))
        <div class="alert alert-success">{{ $mensagem }}</div>
    @endif

    <form action="/temporadas/{{ $temporadaId }}/episodios/assistir" method="POST">
        @csrf
        <ul class="list-group">
            @foreach($episodios as $episodio)
                <li class="list-group-item d-flex justify-content">
                    Episodio {{ $episodio->numero }}
                    <input type="checkbox" name="episodio[{{ $episodio->id }}][assistido]"
                    {{ $episodio->assistido ? 'checked' : ' ' }}>
                </li>
            @endforeach
        </ul>

        <button class="btn btn-primary mt-2">
            Save
        </button>

    </form>

@endsection