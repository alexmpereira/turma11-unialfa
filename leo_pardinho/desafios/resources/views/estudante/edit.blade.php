@extends('app')
@section('title', 'Editar Estudnate')
@section('content')

        <h1>Editar Cliente</h1>
        <form action="{{route('estudantes.update', $estudantes)}}" method="POST">
            @csrf 
            @method('PUT')
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input value="{{$estudantes->nome}}" type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome" required>
            </div>
            <div class="mb-3">
                <label for="cpf" class="form-label">CPF:</label>
                <input value="{{$estudantes->cpf}}" type="text" class="form-control" name="cpf" id="cpf" placeholder="Digite o cpf" required>
            </div>
            <div class="mb-3">
                <label for="nascimento" class="form-label">Nascimento:</label>
                <input value="{{$estudantes->nascimento}}" type="text" class="form-control" name="nascimento" id="nascimento" placeholder="Digite a data de nasicmento" required>
            </div>
            <div class="mb-3">
                <label for="sala" class="form-label">Sala:</label>
                <input value="{{$estudantes->sala}}" type="number" class="form-control" name="sala" id="sala" placeholder="Digite a sala" required>
            </div>

            <button class="btn btn-success">Enviar</button>
        </form>
@endsection