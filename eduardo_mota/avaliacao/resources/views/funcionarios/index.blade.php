@extends('app')
@section('title', 'Lista de Funcionarios')
@section('content')
    <h1>Lista de Funcionarios</h1>
    <table class="table">
        <thead>
            <tr>
            
                <th scope="col">Nome</th>
                <th scope="col">Cargo</th>
                <th scope="col">Salario</th>
                <th scope="col">Data de Entrada</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($funcionarios as $funcionario)
            <tr>
                <th scope="row">{{$client->id}}</th>
                <td>
                    <a href="{{ route('funcionarios.show', $funcionario) }}">{{$funcionario->nome}}</a>
                </td>
                <td>{{$funcionario->cargo}}</td>
                <td>{{$funcionario->salario}}</td>
                <td>{{$funcionario->data_entrada}}</td>
                
            </tr>
            @endforeach
        </tbody>
    </table>

   
@endsection