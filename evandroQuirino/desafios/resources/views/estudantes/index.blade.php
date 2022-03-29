@extends('app')
@section('title', 'Lista de estudantes')
@section('content')
    <h1>Lista de Estudantes</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">Dt. nasc</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($estudantes as $estudante)
                <tr>
                    <td>
                        {{ $estudante->nome }}
                    </td>
                    <td>
                        {{ $estudante->cpf }}
                    </td>
                    <td>
                        {{ $estudante->nascimento= date("d-m-Y", strtotime($estudante->nascimento));}}
                    </td>
                    <td >
                        <button>
                            editar
                        </button>
                        <button >
                            excluir
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a class="btn btn-success" href="{{ route('estudantes.create') }}">Novo Estudante</a>
@endsection
