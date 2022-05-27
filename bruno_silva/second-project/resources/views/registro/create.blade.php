@extends('layout')

@section('title', 'Registro')
@section('cabecalho', 'Registro')

@section('conteudo')
    <form action="" method="post">
        @csrf


        <div class="form-control">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" required class="form-control">
        </div>

        <div class="form-control">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" required class="form-control">
        </div>

        <div class="form-control">
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" required min="1" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Entrar</button>
    </form>
@endsection
