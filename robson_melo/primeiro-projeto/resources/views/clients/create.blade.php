@extends('app')
@section('title', 'Novo Cliente')
@section('content')

        <h1>Novo Cliente</h1>
        <form action="{{ route('clients.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome" required>
            </div>
            <div class="mb-3">
                <label for="endereco" class="form-label">Endereço:</label>
                <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Digite o endereço" required>
            </div>
            <div class="mb-3">
                <label for="observacao" class="form-label">Observação:</label>
                <textarea type="text" class="form-control" name="observacao" id="observacao" placeholder="Digite a Observação" required></textarea>
            </div>

            <button class="btn btn-success">Enviar</button>
        </form>
@endsection
