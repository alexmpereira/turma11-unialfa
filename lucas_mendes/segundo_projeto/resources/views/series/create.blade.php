@extends('layout')

@section('cabecalho')

@endsection

@section('conteudo')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<a href="{{route('series.index')}}" class="btn btn-dark mb-2">voltar</a>

<ul class="list-group">
    <h1>Nova Serie</h1>
    <form
    action="{{ route('series.store') }}"
    method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome da serie">
        </div>

        <button class="btn btn-success">Salvar</button>
    </form>
</ul>
@endsection
