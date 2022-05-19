@extends('app')
@section('title', 'Series')
@section('cabecalho','Netflix')
@section('conteudo')

    @if(!empty($mensagem))
    <div class="alert alert-success">
        {{ $mensagem }}
    </div>
    @endif
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col 10">Nome</th>
                <th scope="col 10">Ações</th>
            </tr>
        </thead>

        <tbody>
            <tr>
            @foreach ($series as $serie)
         
            <td class="list-view ">
                {{ $serie->nome }}
            </td>

            <td>
            <form>
               <span class="d-flex"> 
                    <a href="serie/{{ $serie->id }}/temporadas" class="btn btn-info">
                        Temporadas
                    </a>
                    <form action="{{ route('serie.destroy', $serie) }}" method="POST">
                        @csrf
                        @method('DELETE')
                            <button class="btn btn-dark" style="margin-left: 1rem;"
                            type="submit"
                            onclick="return confirm('Deseja apagar?')"
                            >
                            Apagar
                            </button>
                </form>
               </span>
               
         </td>
        </tr>
        @endforeach
        </tbody>
       
    </table>

    <a class="btn btn-danger mb-2" href="{{ route('serie.create') }}">Adicionar</a>
@endsection