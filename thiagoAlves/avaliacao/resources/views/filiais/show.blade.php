@extends('app')
@section('title', 'Detalhes da Filial')

@section('content')
    <div class="card rounded shadow-lg">
        <div class="card-header text-center bg-primary text-light rounded">
            Detalhes da Filial {{ $filial->nome }}
        </div>

        <div class="card-body">
            <p><strong>Nome</strong>: {{ $filial->nome_filial }}</p>
            <p><strong>Região</strong>: {{ $filial->regiao }}</p>
            <p><strong>Data da criação</strong>: {{ date('d/m/Y', strtotime($filial->data_criacao))  }}</p>
        </div>
        <div class="card-footer">
            <a class="btn btn-success" href="{{ route('filiais.index') }}">
                <i class="fa fa-arrow-left"></i> Voltar para a lista
            </a>

        </div>
    </div>
@endsection
