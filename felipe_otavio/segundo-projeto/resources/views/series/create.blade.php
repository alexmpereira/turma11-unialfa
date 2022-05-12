@extends('layout')

@section('cabecalho')
Adicionar Série
@endsection

@section('conteudo')
<a href="{{ route('series.index') }}" class="btn btn-dark mb-2" style="margin-top: 15px">Voltar</a>
    <div class="form-group">
         <form action="{{ route('series.store') }}" method="POST">
            @csrf

        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome">
    </div>

    <button class="btn btn-primary" style="margin-top: 15px">Adicionar</button>
</form>
@endsection
