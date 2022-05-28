@extends('app')
@section('title', 'Lista de Filiais')
@section('content')

<div class="container rounded shadow-lg p-3 bg-light">
    <h2 class="text-center p-3">Lista de Filiais</h2>
<div class="table-responsive">
    <table class="table table-hover table-bordered border-primary">
        <thead class="bg-primary text-white">
            <tr>
                <th><i class="fa fa-hashtag"></i> ID</th>
                <th scope="col"><i class="fa fa-building"></i> Nome</th>
                <th scope="col">Região</th>
                <th scope="col"><i class="fa fa-calendar"></i> Data de criação</th>
                <th scope="col" width="20%"><i class="fa fa-cog"></i> Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($filiais as $filiais)
                <tr>
                    <td>{{ $filiais->id }}</td>
                    <td>
                            {{ $filiais->nome_filial }}
                    </td>
                    <td>
                        {{$filiais->regiao}}
                    </td>
                    <td>
                        {{date('d/m/Y', strtotime($filiais->data_criacao)) }}
                    </td>
                    <td class="text-center">
                        <a  href="{{ route('filiais.show', $filiais) }}" class="btn btn-primary btn-sm m-1">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a  class="btn btn-warning btn-sm m-1">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a  class="btn btn-danger btn-sm m-1">
                            <i class="fa fa-trash"></i>
                        </a>


                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>

@endsection
