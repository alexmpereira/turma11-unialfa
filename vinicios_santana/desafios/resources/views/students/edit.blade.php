@extends('app')
@section('title', 'Edit Student')
@section('content')

    <h1>Edit Student</h1>
    <form action="{{ route('students.update', $student) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input value="{{ $student->name }}" type="text" class="form-control" name="name" id="name"
                placeholder="Type your name">
        </div>
        <div class="mb-3">
            <label for="cpf" class="form-label">CPF:</label>
            <input type="number" value="{{ $student->cpf }}" type="text" class="form-control" name="cpf" id="cpf"
                placeholder="Type your cpf">
        </div>
        <div class="mb-3">
            <label for="birthdate" class="form-label">Birthdate:</label>
            <input type="date" value="{{ $student->birthdate }}" class="form-control" name="birthdate" id="birthdate"
                placeholder="Type your birthdate">
        </div>

        <button class="btn btn-success">Send</button>
    </form>
@endsection
