@extends('app')
@section('title', 'Lista de Alunos')
@section('content')
    <h2>Lista de Estudantes</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">Nasicmento</th>
                <th scope="col">Sala</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estudantes as $estudantes)
            <tr>
                <th scope="row">{{$estudantes->id}}</th>
                <td>
                    <a href="{{route('estudantes.show', $estudantes)}}">{{$estudantes->nome}}</a>
                </td>
                <td>{{$estudantes->cpf}}</td>
                <td>{{$estudantes->nascimento}}</td>
                <td>{{$estudantes->sala}}</td>
                <td>
                    <a
                    class="btn btn-warning"
                    href="{{route('estudantes.edit', $estudantes) }}"
                    >
                        Editar
                    </a>

                </td>
                <th></th>
                <td>
                    <form  action="{{route('estudantes.destroy', $estudantes)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger"
                        type="submit"
                        onclick="return confirm('Tem certeza que deseja apagar?')"
                        >

                        Apagar

                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a class="btn btn-success" href="{{ route('estudantes.create')}}">Novo Estudante</a>
@endsection
