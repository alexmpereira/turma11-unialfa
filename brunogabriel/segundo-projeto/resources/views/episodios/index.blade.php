@extends('layout')

@section('title', 'Episodios')

@section('cabecalho')
    Episódios
@endsection

@section('conteudo')
    @if (!empty($mensagem))
        <div class="alert alert-success">{{$mensagem}}</div>
    @endif


    <form action="/temporada/{{$temporadaId}}/episodios/assistir" method="POST">
        @csrf
        <ul class="list-group">
            @foreach ($episodios as $episodio)
                <li class="list-group-item d-flex justify-content-between">
                    Episódio {{$episodio->numero}}
                    <input
                        type="checkbox"
                        name="episodios[{{$episodio->id}}][assistido]"
                        {{$episodio->assistido ? 'checked' : ''}}>
                </li>
            @endforeach
        </ul>
        <button class="btn btn-primary mt-2">
            Salvar
        </button>
    </form>

@endsection
