@extends('app')
@section('title', 'Filiais')
@section('content')
    <h1 class="text-center">Filiais:</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Filial</th>
                <th scope="col">Região</th>
                <th scope="col">Data criação</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($filiais as $filial)
                <tr>
                    <td>
                        <a href="{{ route('filiais.show', $filial) }}">{{ $filial->id }}</a>
                    </td>
                    <th scope="row">{{ $filial->filial }}</th>
                    <th scope="row">{{ $filial->regiao }}</th>
                    <th scope="row">{{ $filial->data_criacao }}</th>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
