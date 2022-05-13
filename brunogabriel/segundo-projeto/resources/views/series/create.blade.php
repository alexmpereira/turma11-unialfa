@extends('layout')

@section('title', 'Nova Série')
@section('cabecalho', 'Nova Série')

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

  <a href="{{route('series.index')}}" class="btn btn-dark mb-2">Voltar</a>
  <form action="{{route('series.store')}}" method="POST">
      @csrf
      <div class="row">
          <div class="col col-8">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome"
            placeholder="Digite o nome da série" required>
          </div>

          <div class="col col-2">
            <label for="qtd_temporadas" class="form-label">Nº de Temporadas</label>
            <input type="number" class="form-control" name="qtd_temporadas" id="qtd_temporadas"/>
          </div>

          <div class="col col-2">
            <label for="ep_por_temporada" class="form-label">Epº por Temporadas</label>
            <input type="number" class="form-control" name="ep_por_temporada" id="ep_por_temporada"/>
          </div>
      </div>

      <button class="btn btn-dark mb-2">Cadastrar</button>
  </form>
@endsection
