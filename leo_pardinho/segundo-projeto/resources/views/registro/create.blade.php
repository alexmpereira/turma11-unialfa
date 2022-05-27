@extends('app')
@section('title')
@section('cabecalho')
 Registro
@endsection

@section('conteudo')

    <form action="/registrar" method="POST">
        @csrf
                <div class="form-control">
                    <label for="name">Nome</label>
                    <input type="name" name="name" id="name" required class="form-control">
                </div>

                <div class="form-control">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" required class="form-control">
                </div>
                
                <div class="form-control">
                    <label for="password">Senha</label>
                    <input type="password" name="password" id="password" required min="1" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">
                    Registrar
                </button>
    </form>
@endsection