@extends('app')
@section('title', 'Lista de Funcionários')

@section('content')
    <h1>Lista de Funcionários</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Salário</th>
                    <th scope="col">Data de Entrada</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($funcionarios as $funcionario)
                <tr>
                    <th scope="row">{{ $funcionario->id }}</th>
                        <td>
                            <a href="{{ route('funcionarios.show', $funcionario) }}">
                                {{ $funcionario->nome }}
                            </a>
                        </td>
                        <td>{{ $funcionario->cargo }}</td>
                        <td>{{ $funcionario->salario }}</td>
                        <td>{{ $funcionario->data_entrada }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{route('funcionarios.edit', $funcionario)}}">
                                Editar
                            </a>

                            <form action="{{route('funcionarios.destroy', $funcionario)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button
                                    class="btn btn-danger"
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
        <a class="btn btn-success" href="{{route('funcionarios.create')}}">
            Novo Funcionário
        </a>
@endsection
