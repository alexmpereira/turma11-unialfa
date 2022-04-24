@extends('layout')
@section('cabecalho', 'Edição de série')
@section('conteudo')
  <form action="{{route('series.store', $serie)}}" method="POST">
    @csrf
      <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input value="{{$serie->nome}}" type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome" required>
      </div>
      <button class="btn btn-success">Enviar</button>
  </form>
@endsection
