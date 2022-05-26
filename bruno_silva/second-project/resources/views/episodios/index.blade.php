@extends('layout')

@section('title', 'Episodios')

@section('cabecalho')
    Episodios
@endsection

@section('conteudo')
    @if (!empty($mensagem))
        <div class="alert alert-success"> {{ $mensagem }}</div>
    @endif
    <form action="/temporadas/{{ $temporadaId }}/episodios/assistir" method="POST">
        @csrf
        <ul class="list-group">
            @foreach ($episodios as $episodio)
                <li class="list-group-item d-flex justify-content-center">
                    Episodio {{ $episodio->numero }}
                    <input type="checkbox" name="episodio[{{ $episodio->id }}][assistido]" id=""
                        {{ $episodio->assistido ? 'checked' : '' }}>
                </li>
            @endforeach
        </ul>
        <button class="btn btn-primary mt-2">Salvar</button>
    </form>
@endsection
