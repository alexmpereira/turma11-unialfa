@extends('app')
@section('title', 'Lista Estudante')
@section('content')

    <h1>Lista Estudante</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Nascimento</th>
                </tr>
                <tbody>
                    @foreach ($estudantes as $estudante)
                        <tr>
                            <th scope="row">{{ $estudante->id }}</th>
                            <td>
                                <a href="{{ route('estudantes.show', $estudante) }}">
                                    {{ $estudante->nome}}
                                </a>
                            </td>
                            <td>{{ $estudante->cpf }}</td>
                            <td>{{ $estudante->nascimento }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </thead>
        </table>
    <a class="btn btn-success" href="{{ route('estudantes.create') }}">
        Novo Cliente
    </a>

@endsection