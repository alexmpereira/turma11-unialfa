@extends('app')
@section('title', 'Novo Cliente')

@section('content')
       <h1>teste</h1>
        <form action="{{ route('clients.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome"
                placeholder="Digite um nome">
            </div>

            <div class="mb-3">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" class="form-control" name="endereco" id="endereco"
                placeholder="Digite um endereço">
            </div>

            <div class="mb-3">
                <label for="observacao" class="form-label">Observação</label>
                <input type="text" class="form-control" name="observacao" id="observacao"
                placeholder="Digite uma Observação">
            </div>

            <button class="btn btn-success">Enviar</button>
        </form>
@endsection