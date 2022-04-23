@extends('app')
@section('title', 'Lista de Estudantes')
@section('content')
    <h1 class="text-center">Lista de Estudantes</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">cpf</th>
                <th scope="col">Nascimento</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estudantes as $estudante)
            <tr>
                <th scope="row">{{$estudante->id}}</th>
                <td>
                    <a href="{{ route('estudantes.show', $estudante) }}">{{$estudante->nome}}</a>
                </td>

                <td>{{$estudante->cpf}}</td>
                <td>{{ $estudante->nascimento }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('estudantes.edit', $estudante) }}">
                        Atualizar
                    </a>
                    <form action="{{ route("estudantes.destroy", $estudante) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button
                            class="btn btn-danger"
                            type="submit"
                            onclick="return confirm('Deseja excluir?')"
                        >Delete
                    </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a class="btn btn-success" href="{{ route('estudantes.create')}}">Novo Aluno</a>
@endsection
