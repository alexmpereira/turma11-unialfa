@extends('layout')

@section('cabecalho')
    Series

@endsection

@section('conteudo')

@if(!empty($mensagem))
    <div class="alert alert-sucess">
        {{  $mensagem }}
    </div>
@endif
    <a href="{{ Route('series.create')}}" class="btn btn-dark mb-2">Adicionar</a>
    
    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $serie->titulo }}

                <form action="/series/{{ $serie->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button
                        class="btn btn-danger">
                            Apagar
                    </button>
                </form>
            </li>

            
        @endforeach
    </ul>
@endsection