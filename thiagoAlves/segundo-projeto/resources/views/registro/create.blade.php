@extends('app')
@section('title', 'Registrar-se')
@section('content')
@section('cabeçalho')
    Registrar-se
@endsection
<form action="/registrar" method="post">
    @csrf
    <div class="row rounded bg-dark m-5 p-5">
    <h3 class="text-white">Registrar-se</h3>
    <div class="col-12 bg-dark text-white">
        <label for="name">Nome:</label>
        <input type="name" name="name" id="name" placeholder="Informe seu nome" required class="form-control bg-dark text-white">
    </div>
    <div class="col bg-dark text-white">
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" placeholder="Informe seu e-mail" required class="form-control bg-dark text-white">
    </div>
    <div class="col bg-dark text-white">
        <label for="password">Senha:</label>
        <input type="password" name="password" id="password" placeholder="Informe sua senha" required class="form-control bg-dark text-white">
    </div>
    <div class="text-end">
    <a href="/entrar" class="btn btn-success mt-2"><span class="lnr lnr-user"></span> Já tenho login</a>
    <button class="btn btn-primary mt-2"><span class="lnr lnr-arrow-right"></span> Registrar-se</button>

    </div>
    </div>
</form>




@endsection
