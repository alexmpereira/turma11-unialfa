@extends('app')
@section('title', 'Lista de Clientes')
@section('content')
    <div class="shadow-lg bg-white p-5 m-5 rounded">
        <h1 class="text-center pb-3">Lista de Clientes</h1>
        <div class="table-responsive bg-light">
       <table class="table table-hover table-bordered">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Endereço</th>
            <th scope="col">Observação</th>
            <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
            <tr>
            <th scope="row">{{$client->id}}</th>
            <td>
                <a href="{{route('clients.show', $client)}}">
                {{$client->nome}}
                </a>
            </td>
            <td>{{$client->endereco}}</td>
            <td>{{$client->observacao}}</td>
            <td>
                <a href="" class="btn btn-sm btn-info"><span class="lnr lnr-cog"></span></a>
                <a href="" class="btn btn-sm btn-danger"><span class="lnr lnr-trash"></span></a>
            </td>
            </tr>
            @endforeach
        </tbody>
        </table>

        <a class="btn btn-success" href="{{route('clients.create')}}">
            <span class="lnr lnr-plus-circle"></span> Novo Cliente
        </a>
    </div>
@endsection
