@extends('app')

@section('title', 'Create Student')

@section('content')
    <h1>Create Student</h1>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
           <div class="mb-3">
               <label for="name" class="form-label">Name</label>
               <input type="text" class="form-control" name="name" id="name" placeholder="Type your name">
           </div>
           <div class="mb-3">
               <label for="cpf" class="form-label">CPF</label>
               <input type="number" class="form-control" name="cpf" id="cpf" placeholder="Type your cpf">
           </div>
           <div class="mb-3">
               <label for="birthdate" class="form-label">Birthdate</label>
               <input type="date" class="form-control" name="birthdate" id="birthdate" placeholder="Type your birthdate"/>
           </div>
    
           <div class="d-flex">
               <button class="btn btn-success">Send</button>
               <a href="{{ route('students.index') }}" class="btn btn-danger ms-auto">Cancel</a>
           </div>
       </form>
@endsection
