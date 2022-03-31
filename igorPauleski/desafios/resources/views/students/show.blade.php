@extends('app')
@section('title', 'Detalhes do estudantes')

@section('content')
    <div class="card">
        <div class="card-header">
            Detalhes Estudantes {{$student->nome}}
        </div>
        <div class="card-body">
            <p><strong>ID</strong>:{{$student->id}}</p>
            <p><strong>Nome</strong>:{{$student->nome}}</p>
            <p><strong>Cpf</strong>:{{$student->cpf}}</p>
            <p><strong>Data Nascimento</strong>:{{$student->nascimento}}</p>
            <br>
            <a class="btn btn-success" href="{{route('students.index')}}">Voltar</a>
        </div>
    </div>
@endsection
