@extends('app')
@section('title', 'Lista de estudantes')
@section('content')
<h1>Lista Estudantes</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">CPF</th>
            <th scope="col">NASCIMENTO</th>
            <th scope="col">AÇÕES</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
        <tr>
            <th space="row"> {{ $student->id }} </th>
            <td>
                <a href="{{ route('students.show', $student)}}">
                    {{ $student->nome }}
                </a>
            </td>
            <td> {{ $student->cpf }} </td>
            <td> {{ $student->nascimento }} </td>

            <td id="btnAcao">
                <a class="btn btn-primary" href="{{route('students.edit', $student)}}">Editar</a>
                <form action="{{route('students.destroy', $student)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit" onclick="return confirm('Isso irá remover o cadastro do estudante. Confirma?')">
                        Deletar
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<a class="btn btn-success" href="{{ route('students.create') }}">Novo Estudante</a>
@endsection