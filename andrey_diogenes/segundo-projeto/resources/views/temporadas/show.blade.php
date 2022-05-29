@extends('app')
@section('title', 'Detalhes da Serie')

@section('content')
    <div class="card mt-5">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col col-10">
                    <h1>Detalhes da Seire: {{ $serie->nome }}</h1>
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
            <p><strong>ID</strong>: {{ $serie->id }}</p>
            <p><strong>Nome</strong>: {{ $serie->nome }}</p>
        </div>
    </div>
@endsection
