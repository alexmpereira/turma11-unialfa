@extends('layout')

@section('title', 'Registrar-se')

@section('cabecalho')
    Registrar-se
@endsection

@section('conteudo')
    <form action="/registrar" method="POST">
        @csrf
        <div class="form-control">
            <label for="name">name</label>
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

        <button type="submit" class="btn btn-primary mt-3">Registrar-se</button>
    </form>
@endsection
