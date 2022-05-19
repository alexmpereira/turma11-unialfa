@extends('app')
@section('title', 'Lista de Series')
@section('content')
@section('cabeçalho')
    Temporadas de {{$serie->nome}}
@endsection
    <div class="shadow-lg bg-white p-5 m-5 rounded">
        <h1 class="text-center pb-3">Série: {{ $serie->nome}}</h1>
@if (!empty(($mensagem)))
    <div class="alert alert-success" role="alert">
        {{$mensagem}}
    </div>
@endif
        <div class="table-responsive bg-light">
       <table class="table table-hover table-bordered">
        <thead>
            <tr>
            {{-- <th scope="col">ID</th> --}}
            <th scope="col">Temporadas</th>
            {{-- <th scope="col">Quantidade de Episódios</th> --}}
            {{-- <th scope="col">Ações</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($temporadas as $temporada)
            <tr>
            {{-- <th scope="row">{{$temporada->id}}</th> --}}
            {{-- <td>
                <a href="{{route('series.show', $serie)}}">
                {{$serie->nome}}
                </a>
            </td> --}}
            {{-- <td>{{$serie->id}}</td> --}}
            <td>Temporada: {{$temporada->numero}}</td>
            {{-- <td>{{$temporada->episodios->count()}}</td> --}}
            <td>
                <a href="" class="btn btn-sm btn-primary"><span class="lnr lnr-cog"></span></a>
                <form action="/series/{{ $temporada->id }}" method="POST" style="display: inline">
                <button class="btn btn-sm btn-danger"><span class="lnr lnr-trash"></span></button>
                @csrf
                @method('DELETE')
                </form>
            </td>
            </tr>
            @endforeach
        </tbody>
        </table>

        <a href="{{route('series.create')}}" class="btn btn-success rounded-pill">
            <span class="lnr lnr-plus-circle"></span> Nova Série
        </a>
    </div>
@endsection
