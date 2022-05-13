@extends('layout')

@section('conteudo')

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>

@endif

        <h1>Nova Serie</h1>
        <form action="{{ route('series.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col col-8">
                    <label for="name" class="form-label">Nome:</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Digite o nome" required>
                </div>
                <div class="col col-2">
                    <label for="qtd_temporadas" class="form-label">Nº Temporadas</label>
                    <input type="number" class="form-control" name="qtd_temporadas" id="qtd_temporadas" >
                </div>
                <div class="col col-2">
                    <label for="ep_por_temporada" class="form-label">Epº por Temporada</label>
                    <input type="number" class="form-control" name="ep_por_temporada" id="ep_por_temporada" >
                </div>
            </div>

            <button class="btn btn-success mt-2">Enviar</button>
        </form>
@endsection
