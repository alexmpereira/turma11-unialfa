@extends('app')
@section('title', 'Funcionários')
@section('content')
    <h1 class="text-center">Lista de Funcionários</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Cargo</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($funcionarios as $funcionario)
            <tr>
                
                <th scope="row">{{$funcionario->id}}</th>
                <td>

                    <a href="{{ route('funcionarios.show', $funcionario) }}">{{$funcionario->nome}}</a>
                </td>



                <td>{{$funcionario->cargo}}</td>

            </tr>
            @endforeach
        </tbody>
    </table>


@endsection
