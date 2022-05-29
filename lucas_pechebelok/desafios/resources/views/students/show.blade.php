@extends('app')
<<<<<<< HEAD
@section('title', 'Detail Student')
@section('content')

    <div class="card">
        <div class="card-header">
            Student: {{ $student->name }}
        </div>
        <div class="card-body">
            <p><strong>ID: </strong>{{ $student->id }}</p>
            <p><strong>Name: </strong>{{ $student->name }}</p>
            <p><strong>CPF: </strong>{{ $student->cpf }}</p>
            <p><strong>Birthdate: </strong>{{ $student->birthdate }}</p>

            <a class="btn btn-success" href="{{ route('students.index') }}">To Back</a>

        </div>

    </div>
@endsection
=======
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
>>>>>>> dc6d2954af9e7d7d3fe3866d42dcdaed0a358a3f
