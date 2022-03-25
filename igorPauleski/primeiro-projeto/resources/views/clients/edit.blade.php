@extends('app')
@section('title', 'Novo cliente')

@section('content')
    <h1>Editar Cliente</h1>
    <form action="{{ route('clients.update', $client) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input value="{{ $client->nome }}" type="text" class="form-control" name="nome" id="nome" placeholder="Digite o NOME...">
        </div>
        <div class="mb-3">
            <label for="endereco" class="form-label">Endereco</label>
            <input value="{{ $client->endereco }}" type="text" class="form-control" name="endereco" id="endereco" placeholder="Digite o ENDEREÇO...">
        </div>
        <div class="mb-3">
            <label for="observacao" class="form-label">Obeservacao</label>
            <textarea class="form-control" name="observacao" id="obeservacao" placeholder="Digite o OBERVAÇÃO...">
                {{ $client->obeservacao }}"
            </textarea>
        </div>

        <button class="btn btn-success">Editar</button>
    </form>
@endsection
