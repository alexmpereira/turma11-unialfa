@extends('app')
@section('conteudo')

<h1 style="font-family: 'Bebas Neue', cursive; margin-top: 1rem;">LISTA DE SÉRIES</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Serie</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
        <tbody>
            @foreach ($series as $serie)
        <tr>
            <td>
                <a>{{$serie->nome}}</a>
            </td>
            <td>
                <form action="{{ route('serie.destroy', $serie) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-dark"
                    type="submit"
                    onclick="return confirm('Realmente deseja apagar?')"
                    >
                        Apagar
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
</table>

<a href="{{route('serie.create')}}" class="btn btn-danger mb-2" style="margin-top: 1rem;">Adicionar</a>

@endsection