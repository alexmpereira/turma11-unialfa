@extends('app')

@section('title', 'Criar Série')

@section('content')
    <h1>Criar Série</h1>
    <form action="{{ route('series.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome">
        </div>

        <div class="d-flex">
            <button class="btn btn-success">Enviar</button>
            <a href="{{ route('series.index') }}" class="btn btn-danger ms-auto">Cancelar</a>
        </div>
    </form>
@endsection
