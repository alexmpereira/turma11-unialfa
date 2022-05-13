@extends('app')
@section('title', 'Series')
@section('cabecalho','Netflix')
@section('conteudo')
    <h1>Series Disponiveis</h1>

    @if(!empty($mensagem))
    <div class="alert alert-success">
        {{ $mensagem }}
    </div>
    @endif
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col 10">Nome</th>
                <th scope="col 10">Actions</th>
            </tr>
        </thead>

        <tbody>
            <tr>
            @foreach ($series as $serie)
         
            <td class="list-group-item d-flex justify-content-between align-items-center">
                {{ $serie->nome }}
            </td>
            <td>
               
               </form>
               <span class="d-flex"> 
                    <a href="serie/{{ $serie->id }}/temporadas" class="btn btn-info btn-sm ml-1">
                        Temporadas
                    </a>
               </span>
            </td>

        </tr>
        @endforeach
        </tbody>
       
    </table>

    <a class="btn btn-dark mb-2" href="{{ route('serie.create') }}">Adicionar Serie</a>
@endsection