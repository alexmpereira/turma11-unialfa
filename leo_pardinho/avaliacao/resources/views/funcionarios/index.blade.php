@extends('app')
@section('title', 'Lista de Funcionários')
@section('content')
    <h3>Lista de Funcionários</h3>
    <table class="table">
        <thead>
            <tr class="text-secondary">
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Cargo</th>
                <th scope="col">Salário</th>
                <th scope="col">Data Entrada</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($funcionarios as $funcionarios)
            <tr>
                <th scope="row">{{$funcionarios->id}}</th>
                <td>
                <a class="link-info text-decoration-none" href="{{ route('funcionarios.show', $funcionarios) }}">{{$funcionarios->nome}}</a>
                </td>
                <td>
                    <a>{{$funcionarios->cargo}}</a>
                </td>
                <td>
                    <a>{{$funcionarios->salario}}</a>
                </td>
                <td>
                    <a>{{$funcionarios->data_entrada}}</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
