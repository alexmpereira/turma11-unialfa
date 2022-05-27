@extends('app')
@section('title', 'Login')
@section('content')
@section('cabeçalho')
    Entrar
@endsection

    <form action="/entrar" method="post">
        @csrf
        <div class="row rounded bg-dark m-5 p-5">
        <h3 class="text-white">Entrar</h3>

        <div class="col bg-dark text-white">
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" required placeholder="Informe seu e-mail" class="form-control bg-dark text-white">
        </div>
        <div class="col bg-dark text-white">
            <label for="senha">Senha:</label>
            <input type="password" name="password" id="password" placeholder="Informe sua senha" required class="form-control bg-dark text-white">
        </div>
        <div class="text-end">
        <a href="/registrar" class="btn btn-primary mt-2"><span class="lnr lnr-user"></span> Registrar-se</a>
        <button class="btn btn-success mt-2"><span class="lnr lnr-arrow-right"></span> Entrar</button>

        </div>
        </div>
    </form>



@endsection
