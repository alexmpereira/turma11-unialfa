@extends('layout')

@section('title', 'Editar Série')
@section('cabecalho', 'Editar Série')

@section('conteudo')
  <a href="{{route('series.index')}}" class="btn btn-dark mb-2">Voltar</a> 
  <form action="{{route('series.update', $serie)}}" method="POST">
      @csrf
      @method('PUT')
      <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" value="{{$serie->nome}}" class="form-control" name="nome" id="nome" placeholder="Digite o nome da série" required>
      </div>

      <button class="btn btn-dark mb-2">Editar</button>
  </form>   
@endsection