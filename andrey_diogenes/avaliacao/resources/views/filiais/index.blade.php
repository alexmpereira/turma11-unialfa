@extends('app')
@section('title', 'Lista de Filiais')

@section('content')
    <h1 class="mt-5">Lista de Filiais</h1>
    <table class="table table-striped table-bordered rounded-1">
        <thead class="thead-dark table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Região</th>
                <th scope="col">Ver Detalhes</th>               
            </tr>
        </thead>
        <tbody>
            @foreach ($filiais as $filial)
                <tr class="align-middle">
                    <th scope="row">{{ $filial->id }}</th>
                    <td>
                        <a class="text-decoration-none" href="{{ route('filiais.show', $filial) }}">
                            {{ $filial->nome }}
                        </a>
                    </td>
                    <td>{{ $filial->regiao }}</td>
                    <td>
                        <a href="{{ route('filiais.show', $filial) }}">
                            <button type="button" class="btn btn-primary">
                                <svg class="mb-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-zoom-in" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                                    <path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z"/>
                                    <path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z"/>
                                  </svg>
                            </button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection