@extends('app')
@section('title', 'Nova Serie')

@section('content') 
    @if ($errors->any())
    <div class="alert alert-danger mt-5">
        <ul class="m-0">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card mt-5">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col col-10">
                    <h1>Nova Serie</h1>
                </div>
                <div class="col col-2">
                    <a href="{{ route('series.index') }}">
                        <button type="button" class="btn btn-primary align-middle">
                            <svg class="mb-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                            </svg>
                            Voltar
                        </button>
                    </a>
                </div>  
            </div>
        </div>

        <div class="card-body">
            <form action="{{ route('series.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col col-8 mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome" required>
                    </div>
                    <div class="col col-2 mb-3">
                        <label for="qtd_temporadas" class="form-label">Nº de Temporadas</label>
                        <input type="number" class="form-control" name="qtd_temporadas" id="qtd_temporadas" placeholder="Digite a quantidade de temporadas" required>
                    </div>
                    <div class="col col-2 mb-3">
                        <label for="ep_por_temporada" class="form-label">Nº Ep. por Temp.</label>
                        <input type="number" class="form-control" name="ep_por_temporada" id="ep_por_temporada" placeholder="Digite a quantidade de episósios por temporada" required>
                    </div>
                </div>
        
                <button type="submit" class="btn btn-success">
                    Enviar
                </button>
            </form>
        </div>
    </div>
@endsection
