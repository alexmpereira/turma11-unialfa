@extends('app')
@section('title', 'Editar Estudnate')
@section('content')

        <h2>Editar Informações</h2>
        <form action="{{route('estudantes.update', $estudantes)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3" style="width: 30rem;">
                <label for="nome" class="form-label">Digite o Nome:</label>
                <input value="{{$estudantes->nome}}" type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required>
            </div>
            <div class="mb-3" style="width: 15rem;">
                <label for="cpf" class="form-label">Digite o CPF:</label>
                <input value="{{$estudantes->cpf}}" type="text" class="form-control" name="cpf" id="cpf" placeholder="CPF" required>
            </div>
            <div class="mb-3" style="width: 15rem;">
                <label for="nascimento" class="form-label">Digite a Data de Nascimento:</label>
                <input value="{{$estudantes->nascimento}}" type="text" class="form-control" name="nascimento" id="nascimento" placeholder="Nascimento" required>
            </div>
            <div class="mb-3" style="width: 10rem;">
                <label for="sala" class="form-label">Selecione a Sala:</label>
                <input value="{{$estudantes->sala}}" type="number" class="form-control" name="sala" id="sala" placeholder="Sala" required>
            </div>

            <button class="btn btn-success">Enviar</button>
        </form>
@endsection
