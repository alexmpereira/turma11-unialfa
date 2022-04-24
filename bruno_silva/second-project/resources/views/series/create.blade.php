@extends('layout')
@section('cabecalho', 'Cadastro de séries')
@section('conteudo')
  <form action="{{route('series.store')}}" method="POST">
    @csrf
      <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome" required>
      </div>
      <button class="btn btn-success">Enviar</button>
  </form>
@endsection
