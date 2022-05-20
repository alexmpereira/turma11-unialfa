@extends('app')
@section('title', 'Lista de Series')
@section('content')
    <div class="shadow-lg bg-dark text-white p-5 m-5 rounded">
        <h1 class="text-center pb-3">Lista de Séries</h1>
@if (!empty(($mensagem)))
    <div class="alert alert-success" role="alert">
        {{$mensagem}}
    </div>
@endif
        <div class="table-responsive">
       <table class="table table-hover table-bordered text-white table-dark">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($series as $serie)
            <tr>
            <th scope="row" width="10%">{{$serie->id}}</th>
            <td>{{$serie->nome}}</td>
            <td width="10%">
            <span class="d-flex">
                <a href="/series/{{$serie->id}}/temporadas" class="btn btn-sm btn-success m-1"><span class="lnr lnr-film-play"></span></a>
                <form action="/series/{{ $serie->id }}" method="POST" style="display: inline">
                    <button class="btn btn-sm btn-danger m-1"><span class="lnr lnr-trash"></span></button>
                    @csrf
                    @method('DELETE')
                    </form>
                    <button class="btn btn-primary btn-sm m-1" data-bs-toggle="modal" data-bs-target="#editarSerie"  onclick="abreModal('{{$serie->id}}', '{{$serie->nome}}')"><i class="lnr lnr-pencil"></i></button>
            </span>
            </td>
            </tr>
            @endforeach
        </tbody>
        </table>

        <a href="{{route('series.create')}}" class="btn btn-success rounded-pill">
            <span class="lnr lnr-plus-circle"></span> Nova Série
        </a>
    </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="editarSerie" tabindex="-1" aria-labelledby="editarSerieLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-dark text-white border-secondary">
          <div class="modal-header border-secondary">
            <h5 class="modal-title">Editar Série</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
        <form action="{{route('series.editaNome')}}" method="post">
            @csrf
          <div class="row">
            <div class="col-12" hidden>
            <label for="id" class="form-label">id:</label>
            <input type="text" class="form-control" name="id" id="id">
              </div>
           <div class="col-12">
            <label for="nome" class="form-label">Nome da série:</label>
            <input type="text" class="form-control bg-dark text-white border-secondary" name="nome" id="nome" placeholder="Digite o nome">
          </div>
            </div>
            </div>
          <div class="modal-footer border-secondary">
            <a class="btn btn-danger" data-bs-dismiss="modal"><i class="lnr lnr-cross-circle"></i> Fechar</a>
            <button type="submit" class="btn btn-success"><i class="lnr lnr-checkmark-circle"></i> Salvar</button>
          </form>
          </div>
        </div>
      </div>
  </div>

    <script>
        function abreModal(id,serie) {
            $('#editarSerie').modal('show');
            $('#id').val(id);
            $('#nome').val(serie);


        }

    </script>
@endsection
