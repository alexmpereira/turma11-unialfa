@extends('app')

@section('title', 'Employee Detail')

@section('content')
    <div class="card">
        <div class="card-header">
            Employee Detail: {{ $employee->name }}
        </div>

        <div class="card-body">
            <p><strong>ID</strong>: {{ $employee->id }}</p>
            <p><strong>Name</strong>: {{ $employee->name }}</p>
            <p><strong>Responsibility</strong>: {{ $employee->responsibility }}</p>
            <p><strong>Salary</strong>: {{ $employee->salary }}</p>
            <p><strong>Start Date</strong>: {{ $employee->start_date }}</p>
            <br>
            <a class="btn btn-success" href="{{ route('employees.index') }}">To Back</a>
        </div>
    </div>
@endsection

