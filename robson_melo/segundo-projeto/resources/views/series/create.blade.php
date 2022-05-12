@extends('layout')

@section('conteudo')

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>

@endif

        <h1>Nova Serie</h1>
        <form action="{{ route('series.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Digite o nome" required>
            </div>

            <button class="btn btn-success">Enviar</button>
        </form>
@endsection
