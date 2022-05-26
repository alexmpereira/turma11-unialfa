@extends('layout')

@section('cabecalho')
    Episódios
@endsection

@section('conteudo')
    <form action="/temporada{{ $temporada }}/episodios/assistir" method="post">
        @csrf
        <ul class="list-group">
            @foreach($temporada->episodios as $episodio)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Episódio {{ $episodio->numero }}
                    <input 
                        type="checkbox"
                        name="episodio[{{ $episodio->id }}][assistido]"
                        {{ $episodio->assistido ? 'checked' : ''}}>
                </li>
            @endforeach
        </ul>
        <button class="btn btn-primary mt-2">Salvar</button>
    </form>