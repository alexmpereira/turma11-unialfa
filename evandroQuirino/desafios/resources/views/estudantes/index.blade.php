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
                        <a href="{{ route('estudantes.show', $estudante) }}">
                            {{ $estudante->nome }}
                        </a></td>
                    <td>
                        {{ $estudante->cpf }}
                    </td>
                    <td>
                        {{ $estudante->nascimento= date("d-m-Y", strtotime($estudante->nascimento));}}
                    </td>
                    <td style="display: flex">
                        <a href="{{ route('estudante.edit', $estudante) }}" class="btn btn-warning">
                            Editar
                        </a>

                        <form action="{{ route('estudante.destroy', $estudante) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button 
                            type="submit" 
                            class="btn btn-danger" 
                            onclick="return confirm('tem certeza que deseja apagar?')">
                                Excluir
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a class="btn btn-success" href="{{ route('estudantes.create') }}">Novo Estudante</a>
@endsection

