@extends('app')
@section('title', 'Lista de Series')
@section('content')
@section('cabeçalho')
    Temporadas de {{$serie->nome}}
@endsection
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

    <div class="rounded">
        <h1 class="text-center text-light p-3">Série: {{ $serie->nome}}</h1>
    </div>
    <div class="row text-center">
    @foreach ($temporadas as $temporada)
        <div class="cardSeries col p-5 m-5 text-center text-light shadow-lg rounded border border-dark ">
            <h3>Temporada {{$temporada->numero}}</h3>
        </div>
    @endforeach
    </div>
</div>












@endsection
