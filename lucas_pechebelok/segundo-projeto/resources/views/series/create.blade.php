@extends('app')

<<<<<<< HEAD
@section('title', 'Criar Série')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h1>Criar Série</h1>
    <form action="{{ route('series.store') }}" method="POST">
        @csrf
        <div class="row mb-5">
            <div class="col col-8">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome">
            </div>
            <div class="col col-2">
                <label for="qtd_temporadas">Nº de Temporadas</label>
                <input type="number" class="form-control" name="qtd_temporadas" id="qtd_temporadas">
            </div>
            <div class="col col-2">
                <label for="ep_por_temporada">Epº por Temporada</label>
                <input type="number" class="form-control" name="ep_por_temporada" id="ep_por_temporada">
            </div>
        </div>

        <div class="d-flex">
            <button class="btn btn-success">Enviar</button>
=======
@section('title', 'Criar série')

@section('content')
    <h1>Criar série</h1>
    <form action="{{ route('series.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome">
        </div>

        <div class="d-flex">
            <button class="btn btn-success">Salvar</button>
>>>>>>> dc6d2954af9e7d7d3fe3866d42dcdaed0a358a3f
            <a href="{{ route('series.index') }}" class="btn btn-danger ms-auto">Cancelar</a>
        </div>
    </form>
@endsection
