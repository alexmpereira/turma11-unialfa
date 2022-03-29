@extends('app')
@section('title', 'Lista de estudantes')

@section('content')
    <h1>Lista de Estudantes</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr>
                    <th scope="row">{{ $student->id }}</th>
                        <td>
                            <a href="{{ route('students.show', $student) }}">
                                {{ $student->nome }}
                            </a>
                        </td>
                        <td>{{ $student->cpf }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{route('students.edit', $student)}}">
                                Editar
                            </a> 
                            
                            <form action="{{route('students.destroy', $student)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button 
                                    class="btn btn-danger" 
                                    type="submit"
                                    onclick="return confirm('Tem certeza que deseja apagar?')"
                                >
                                    Apagar
                                </button>
                            </form>    
                        </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a class="btn btn-success" href="{{route('students.create')}}">
            Novo Estudante
        </a>    
@endsection