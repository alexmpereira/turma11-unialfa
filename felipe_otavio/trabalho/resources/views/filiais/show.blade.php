@extends('app')
@section('title', 'Detalhes de Filial')
@section('content')
        <div class="card">
            <div class="card-header">
                Detalhes do Cliente: {{$filial->nome_filial}}
            </div>
            <div class="card-body">
                <p><strong>ID</strong>{{ $filial->id }}</p>
                <p><strong>Nome</strong>{{ $filial->nome_filial }}</p>
                <p><strong>Regiao</strong>{{ $filial->regiao }}</p>
                <p><strong>Data</strong>{{ $filial->data_criacao }}</p>

                <a class="btn btn-success" href="{{ route('filiais.index')}}">Voltar para a lista de Filiais</a>

            </div>

        </div>
@endsection
