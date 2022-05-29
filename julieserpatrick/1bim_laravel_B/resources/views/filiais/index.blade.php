@extends('app')
@section('title', 'Lista de Filiais')
@section('content')
    <h1>Lista de Filiais</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Regiao</th>
                <th scope="col">Data Criacao</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($filiais as $filial)
            <tr>
                <th scope="row">{{$filial->id}}</th>
                <td>
                    <a href="{{ route('filiais.show', $filial) }}">{{$filial->nome_filial}}</a>
                </td>
                <td>{{$filial->regiao}}</td>
                <td>{{$filial->data_criacao}}</td>

            </tr>
            @endforeach
        </tbody>
    </table>


@endsection
