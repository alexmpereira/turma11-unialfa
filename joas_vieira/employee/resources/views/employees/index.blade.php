@extends('app')

@section('title', 'Employee list')

@section('content')
    <h1>Employee List</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Responsibility</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <th scope="row">{{ $employee->id }}</th>
                    <td>
                        <a href="{{ route('employees.show', $employee) }}">
                            {{ $employee->name }}
                        </a>
                    </td>
                    <td>{{ $employee->responsibility }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
