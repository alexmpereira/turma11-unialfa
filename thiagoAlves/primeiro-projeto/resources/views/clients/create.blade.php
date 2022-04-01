@extends('app')
@section('title', 'Novo Cliente')
@section('content')

    <div class="shadow-lg bg-white p-5 m-5 rounded">
    <h1>Novo Cliente</h1>

    <form action="{{route('clients.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome">
        </div>
        <div class="mb-3">
            <label for="endereco" class="form-label">Endereco:</label>
            <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Digite o endereço">
        </div>
        <div class="mb-3">
            <label for="observacao" class="form-label">Observação:</label>
            <textarea class="form-control" name="observacao" id="observacao"></textarea>
        </div>
        <button class="btn btn-success"><span class="lnr lnr-check-mark-circle"></span> Enviar</button>
    </form>
    </div>



@endsection
