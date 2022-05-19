@extends('app')
@section('title', 'Nova Serie')
@section('conteudo')
        
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <h1 style="font-family: 'Bebas Neue', cursive; margin-top: 1rem;">Nova Serie</h1>
        
        <form action="{{ route('serie.store')}}" method="POST">
            @csrf
            <div class="row">

                <div class="col col-8">
                    <label for="nome" class="form-label">Série: </label>
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o Nome da Série" required>
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
            
            <button class="btn btn-danger mt-2" style="margin-top: 1rem;">Enviar</button>
            <a  style="margin-top: 0.5rem;" href="{{ route('serie.index') }}" class="btn btn-dark mb">Voltar</a>
        </form>
@endsection
