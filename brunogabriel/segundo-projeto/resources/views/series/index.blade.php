@extends('layout')

@section('title', 'Séries')
@section('cabecalho', ' Lista de Séries')

@section('conteudo')

<table class="table">
    <thead>
        <tr>
            <th></th>
            <th scope="col">Nome</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($series as $serie)
            <tr>
                <th scope="row">
                    <td>
                        {{ $serie->nome }}
                    </td>
                    <td>
                        <form action="/series/{{$serie->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button 
                                class="btn btn-danger btn-sm" 
                                type="submit"
                                onclick="return confirm('Tem certeza que deseja apagar?')"
                            >
                                Excluir
                            </button>
                        </form>  
                    </td>
                </th>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="{{route('series.create')}}" class="btn btn-dark mb-2">Adicionar</a>
@endsection