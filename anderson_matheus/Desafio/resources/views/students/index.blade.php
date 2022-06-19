@extends('app')
@section('title', 'Lista de Estudantes')
@section('content')
  <h1>Lista de Estudantes</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Cpf</th>
                    <th scope="col">Nascimento</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr>
                    <th scope="row">{{$student->id}}</th>
                    <td>
                        <a href="{{ route('students.show', $student) }}">{{$student->nome}}</a>
                    </td>
                    <td>{{$student->cpf}}</td>
                    <td>{{$student->nascimento}}</td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a class="btn btn-success" href="{{ route('students.create')}}">Novo Estudante</a>
@endsection
