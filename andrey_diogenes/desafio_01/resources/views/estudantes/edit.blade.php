@extends('app')
@section('title', 'Editar Estudante')

@section('content')
    <div class="card mt-5">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col col-10">
                    <h1>Editar Estudante</h1>
                </div>
                <div class="col col-2">
                    <a href="{{ route('estudantes.index') }}">
                        <button type="button" class="btn btn-primary align-middle">
                            <svg class="mb-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                            </svg>
                            Voltar
                        </button>
                    </a>
                </div>    
            </div>
        </div>

        <div class="card-body">
            <form action="{{ route('estudantes.update', $estudante) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input value="{{ $estudante->nome }}" type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome" required>
                </div>
        
                <div class="mb-3">
                    <label for="endereco" class="form-label">CPF</label>
                    <input value="{{ $estudante->cpf }}" type="text" class="form-control" name="cpf" id="cpf" placeholder="Digite o CPF" required>
                </div>
        
                <div class="mb-3">
                    <label for="observacao" class="form-label">Data de Nascimento</label>
                    <input value="{{ $estudante->nascimento }}" type="date" class="form-control" name="nascimento" id="nascimento" placeholder="Digite a Data de Nascimento" required>
                </div>
        
                <button type="submit" class="btn btn-success">
                    Enviar
                </button>
            </form>
        </div>
    </div>
@endsection
