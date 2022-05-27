@extends('app')
@section('title', 'Novo Estudante')
@section('content')

        <h1>Editar Estudante</h1>
        <form action="{{ route('students.store')}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input value="{{ $student->nome }}" type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome">
            </div>
            <div class="mb-3">
                <label for="Cpf" class="form-label">Cpf:</label>
                <input value="{{ $student->cpf }}" type="text" class="form-control" name="cpf" id="cpf" placeholder="Digite o CPF">
            </div>
            <div class="mb-3">
                <label for="nascimento" class="form-label">Nascimento:</label>
                <textarea type="text" class="form-control" name="nascimento" id="nascimento" placeholder="Digite o nascimento"></textarea>
                 {{ $student->nascimento }}
            </div>

            <button class="btn btn-success">Enviar</button>
        </form>
@endsection
