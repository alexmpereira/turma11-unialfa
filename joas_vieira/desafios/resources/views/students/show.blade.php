@extends('app')
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
