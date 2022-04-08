@extends('layout')
@section('title', 'Nova Serie')

@section('conteudo')
    <h1>Nova Serie</h1>
    <form action="{{ route('series.store') }}" method="POST">
    @csrf
        <div class="md-3">

            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome" required>
        </div>

        <button class="btn btn-primary">Adicionar</button>
    </form>
@endsection



