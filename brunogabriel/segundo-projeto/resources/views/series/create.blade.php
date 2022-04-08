@extends('layout')

@section('title', 'Nova Série')
@section('cabecalho', 'Séries')

@section('conteudo')
  <h1>Nova Série</h1>
  <form action="{{route('series.store')}}" method="POST">
      @csrf
      <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome da série" required>
      </div>

      <button class="btn btn-dark mb-2">Cadastrar</button>
  </form>    
@endsection       