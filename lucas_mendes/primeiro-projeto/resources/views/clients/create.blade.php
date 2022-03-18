@extends('app')
@section('title', 'Novo cliente')
    

@section('content')
    <h1>Novo Cliente</h1>
    <form action="{{ route('clients.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome">
        </div>

        <div class="mb-3">
            <label for="endereco" class="form-label">Endereco</label>
            <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Digite o endereco">
        </div>

        <div class="mb-3">
            <label for="observacao" class="form-label">observacao</label>
            <input type="text" class="form-control" name="observacao" id="observacao" placeholder="Digite a observacao">
        </div>

        <button class="btn btn-success">Enviar</button>
    </form>
@endsection