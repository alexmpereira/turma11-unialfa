@extends('app')
@section('title', 'Lista de Filiais')
@section('content')
    <h1 class="text-center">Lista de Filiais:</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome Filial</th>
                <th scope="col">Região</th>
                <th scope="col">Data criação</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($filiais as $filial)
            <tr>
            <td>
                <a href="{{ route('filiais.show', $filial) }}">{{$filial->id}}</a>
                </td> 
                <th scope="row">{{$filial->nome_filial}}</th>
                <th scope="row">{{$filial->regiao}}</th>
                <th scope="row">{{$filial->data_criacao}}</th>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
