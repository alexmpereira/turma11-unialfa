@extends('layout')

@section('cabecalho')
    Cadastro Serie

@endsection

@section('content')
    <form action="{{ route('series.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Titulo</label>
            <input type="text" name="nome" id="nome" placeholder="Digite um Titulo" required>
        </div>

        <button class="btn btn-primary">Adicionar</button>
    </form>
@endsection