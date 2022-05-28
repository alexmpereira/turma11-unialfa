@extends('app')
@section('title', 'Detalhes da Filial')
@section('content')
        <div class="card">
            <div class="card-header">
                Detalhes da Filial: {{$filiais->nome_filial}}
            </div>
            <div class="card-body">
                <p><strong>ID: </strong>{{ $filiais->id }}</p>
                <p><strong>Nome Filial: </strong>{{ $filiais->nome_filial}}</p>
                <p><strong>Região:  </strong>{{ $filiais->regiao}}</p>
                <p><strong>Data de Criacao: </strong>{{ $filiais->data_criacao}}</p>

                <a class="btn btn-success" href="{{ route('filiais.index')}}">Voltar</a>

            </div>

        </div>
@endsection
