@extends('app')
@section('title', 'Lista de Series')
@section('content')
    <div class="shadow-lg bg-white p-5 m-5 rounded">
        <h1 class="text-center pb-3">Lista de Séries</h1>
@if (!empty(($mensagem)))
    <div class="alert alert-success" role="alert">
        {{$mensagem}}
    </div>
@endif
        <div class="table-responsive bg-light">
       <table class="table table-hover table-bordered">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($series as $serie)
            <tr>
            <th scope="row" width="10%">{{$serie->id}}</th>
            <td>{{$serie->nome}}</td>
            <td width="10%">
            <span class="d-flex">
                <a href="/series/{{$serie->id}}/temporadas" class="btn btn-sm btn-primary"><span class="lnr lnr-film-play"></span></a>
                <form action="/series/{{ $serie->id }}" method="POST" style="display: inline">
                    <button class="btn btn-sm btn-danger"><span class="lnr lnr-trash"></span></button>
                    @csrf
                    @method('DELETE')
                    </form>
            </span>
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
