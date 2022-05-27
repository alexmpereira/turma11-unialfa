@extends('app')
@section('title', 'Lista de Series')
@section('content')

@if(!empty($mensagem))
    <div class="alert alert-success" role="alert">
        {{$mensagem}}
    </div>
@endif

<style>
.cardSeries{
    width: 100%;
    height: 100%;
    margin: 0 auto;
    background-color: rgba(0, 0, 0, 0.2);
}

.cardSeries:hover{
    cursor: pointer;
    transition: 0.5s ease;
    box-shadow: 0px 0px 20px #000 !important;
    transform: scale(1.1);

}

</style>
<form action="/temporadas/{{$temporadaId}}/episodios/assistir" method="POST" id="formulario">
    @csrf
<input type="hidden" name="episodioId" id="episodioId">
<input type="hidden" name="assistido" value="1" id="assistido">
</form>
    <div class="rounded">
        {{-- <h1 class="text-center text-light p-3">Série: {{ $serie->nome}}</h1> --}}
    </div>
    <div class="row text-center">
    @foreach ($episodios as $episodio)


        <div class="cardSeries col p-5 m-5 text-center text-light shadow-lg rounded border border-dark" onclick="abrirEpisodio('{{$episodio->id}}')">
            <h3>Episódio {{$episodio->numero}}</h3>
        </div>

    @endforeach
    </div>
</div>

<script>
    function abrirEpisodio(idEpisodio){
        $('#episodioId').val(idEpisodio);
        $('#formulario').submit();
    }
</script>











@endsection
