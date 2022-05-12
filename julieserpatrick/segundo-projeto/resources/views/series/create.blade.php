@extends('layout')

@section('cabecalho')
Adicionar Série
@endsection

@section('conteudo')
<a href="{{ route('series.index') }}" class="btn btn-dark mb-2 " style="margin-top: 10px;">Voltar</a>

<form action="{{route('series.index')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome">
    </div>

    <button class="btn btn-primary" style="margin-top: 10px;">Adicionar</button>
</form>
@endsection