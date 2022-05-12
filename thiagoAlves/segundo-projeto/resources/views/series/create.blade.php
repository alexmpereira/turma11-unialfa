@extends('app')
@section('title', 'Nova Série')
@section('content')

    <div class="shadow-lg bg-white p-5 m-5 rounded">
    <h1>Nova Série</h1>

@if($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



    <form action="{{route('series.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome">
        </div>
        <button class="btn btn-success"><span class="lnr lnr-check-mark-circle"></span> Enviar</button>
    </form>
    </div>



@endsection
