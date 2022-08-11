@extends('layout')

@section('cabecalho')
Series
@endsection

@section('conteudo')

@if (!empty($mensagem))
    <div class="alert alert-success text-center">
        {{$mensagem}}
    </div>
@endif

    <a href="{{route('series.create')}}" class="btn btn-dark mb-2">Adicionar</a>

    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{$serie->nome}}
                <form action="{{route('series.destroy', $serie)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">
                        Deletar
                    </button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
