@extends('app')
@section('cabecalho', 'Nova Série')
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $err)
                <li>{{ $err }}</li>
            @endforeach
        </ul>
    </div>
    
@endif

        <h1>Adicionar Série</h1>
        <form action="{{ route('series.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col col-8">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome" required>
    
                </div>

                <div class="col col-2">
                    <label for="qtd_temporadas">N° de Temporadas</label>
                    <input type="number" class="form-control" name="qtd_temporadas" id="qtd_temporadas">
                </div>
    
                <div class="col col-2">
                    <label for="ep_por_temporada">Ep° por Temporada</label>
                    <input type="number" class="form-control" name="ep_por_temporada" id="ep_por_temporada">
                </div>
    
                
                

            </div>
            
           
            <button class="btn btn-danger mt-3 mb">Salvar</button>
            <a class="btn btn-dark mt-3" href="{{ route('series.index') }}"> Voltar</a>

        </form>
@endsection