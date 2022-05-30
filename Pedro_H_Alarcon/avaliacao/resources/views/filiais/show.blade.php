@extends('app')
@section('title', 'Detalhes')
@section('content')
    <div class="card">
        <div class="card-header">
            Detalhes: {{ $filiais->filial }}
        </div>
        <div class="card-body">
            <p><strong>ID: </strong>{{ $filiais->id }}</p>
            <p><strong>Filial: </strong>{{ $filiais->filial }}</p>
            <p><strong>Região: </strong>{{ $filiais->regiao }}</p>
            <p><strong>Data de Criação: </strong>{{ $filiais->data_criacao }}</p>

            <a class="btn btn-success" href="{{ route('filiais.index') }}">Voltar</a>
        </div>

    </div>
@endsection
