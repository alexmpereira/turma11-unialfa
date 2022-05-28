@extends('layouts.app')
@section('title', 'Detalhes da filial')

@section('content')
    <div class="card">
        <div class="card-header">
            Detalhes da Filial {{ $filial->nome_filial }}
        </div>

        <div class="card-body">
            <p><strong>Nome</strong>: {{ $filial->nome_filial }}</p>
            <p><strong>Região</strong>: {{ $filial->regiao }}</p>
            <p><strong>Data de Criação</strong>: {{ $filial->data_criacao }}</p>
            <br>
            <a class="btn btn-success" href="{{ route('filiais.index') }}">
                Voltar para a lista de filiais
            </a>
        </div>
    </div>
@endsection
