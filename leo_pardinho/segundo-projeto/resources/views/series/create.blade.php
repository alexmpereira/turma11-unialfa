@extends('app')
@section('title', 'Nova Serie')
@section('conteudo')
        
        <h1 style="font-family: 'Bebas Neue', cursive; margin-top: 1rem;">Nova Serie</h1>
        
        <form action="{{ route('serie.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome" class="form-label">Série: </label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o Nome da Série" required>
            </div>
            
            <button class="btn btn-danger" style="margin-top: 1rem;">Enviar</button>
            <a  style="margin-top: 1rem;" href="{{ route('serie.index') }}" class="btn btn-dark mb">Voltar</a>
        </form>
@endsection
