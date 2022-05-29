@extends('app')
@section('title', 'Detalhes da Filial')

@section('content')
    <div class="card">
        <div class="card-header">
            Detalhes da Filial {{ $filial->nome }}
        </div>

        <div class="card-body">
            <p><strong>Nome</strong>: {{ $filial->nome_filial }}</p>
            <p><strong>Região</strong>: {{ $filial->regiao }}</p>
            <p><strong>Data da criação</strong>: {{ $filial->data_criacao }}</p>
            <br>
            <a class="btn btn-success" href="{{ route('filiais.index') }}">
                Voltar para a lista
            </a>
        </div>
    </div>
@endsection
