@extends('app')
@section('title', 'Detalhes das Filiais')
@section('content')
        <div class="card">
            <div class="card-header">
                Detalhes das Filiais: {{$filiais->nome_filial}}
            </div>
            <div class="card-body">
                <p><strong>ID: </strong>{{ $filiais->id }}</p>
                <p><strong>Nome: </strong>{{ $filiais->nome_filial }}</p>
                <p><strong>Regiao: </strong>{{ $filiais->regiao }}</p>
                <p><strong>Data: </strong>{{ $filiais->data_criacao }}</p>


                <a class="btn btn-success" href="{{ route('filiais.index')}}">Voltar para a lista de Filiais</a>

            </div>

        </div>
@endsection
