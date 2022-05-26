@extends('app')
@section('title', 'Nova Série')
@section('content')

    <div class="shadow-lg bg-dark text-white p-5 m-5 rounded">
    <h1>Nova Série</h1>

@if($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



    <form action="{{route('series.store')}}" method="post">
        @csrf
        <div class="row">
        <div class="col-12 col-lg-6 mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome">
        </div>
        <div class="col-12 col-lg-3 mb-3">
            <label for="qtd_temporadas" class="form-label">N° de Temporadas:</label>
            <input type="number" class="form-control" name="qtd_temporadas" id="qtd_temporadas" >
        </div>
        <div class="col-12 col-lg-3 mb-3">
            <label for="ep_por_temporada" class="form-label">Episódios por Temporada:</label>
            <input type="number" class="form-control" name="ep_por_temporada" id="ep_por_temporada">
        </div>
        </div>
        <button class="btn btn-success mt-2"><span class="lnr lnr-check-mark-circle"></span> Enviar</button>
    </form>
    </div>



@endsection
