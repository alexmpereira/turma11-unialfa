@extends('app')

@section('cabecalho')
    Episodios
@endsection

@section('conteudo')
    @if (!empty($mensagem))
        <div class="alert alert-success"> {{ $mensagem }}</div>
    @endempty

    <form action="/temporada/{{ $temporadaId }}/episodios/assistir" method="POST">
        @csrf
        <ul class="list-group">
        @foreach ($episodios as $episodio)
            <li class="list-group-item d-flex justify-content-between">
                Episodio {{ $episodio->numero }}
                <input 
                type="checkbox"
                name="episodio[{{ $episodio->id }}][assistido]"
                {{ $episodio->assistido ? 'checked' : ' '}}>
                
            </li>
        @endforeach
        </ul>
        <button class="btn btn-success mt-2">Salvar</button>
        <a href="{{route ('serie.index') }}" class="btn btn-warning mt-2">Voltar</a>
    </form>
   
@endsection