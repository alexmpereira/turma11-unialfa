@extends('app')
@section('title', 'Lista de Estudantes')
@section('content')
    <h1>Lista de Estudantes</h1>
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
            @foreach ($estudante as $estudante)
            <tr>
                <th scope="row">{{$estudante->id}}</th>
                <td>
                    <a href="{{ route('estudante.show', $estudante) }}">{{$estudante->nome}}</a>
                </td>
                 
                <td>{{$estudante->cpf}}</td>
                <td>{{ $estudante->nascimento }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('estudante.edit', $estudante) }}">
                        Atualizar
                    </a>
                    <form action="{{ route("estudante.destroy", $estudante) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button 
                            class="btn btn-danger"
                            type="submit"
                            onclick="return confirm('tem certeza disso bro ??')"    
                        >Delete
                    </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a class="btn btn-success" href="{{ route('estudante.new')}}">Novo Aluno</a>
@endsection