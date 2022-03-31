@extends('app')
@section('title', 'Novo Cliente')
@section('content')

        <h1>Editar Cliente</h1>
        <form action="{{ route('clients.update', $client)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input value="{{ $client->nome }}" type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome" required>
            </div>
            <div class="mb-3">
                <label for="endereco" class="form-label">Endereço:</label>
                <input value="{{ $client->endereco }}" type="text" class="form-control" name="endereco" id="endereco" placeholder="Digite o endereço" required>
            </div>
            <div class="mb-3">
                <label for="observacao" class="form-label">Observação:</label>
                <textarea  type="text" class="form-control" name="observacao" id="observacao" required placeholder="Digite a Observação">{{ $client->observacao }}</textarea>
            </div>

            <button class="btn btn-success">Enviar</button>
        </form>
@endsection