@extends('layout')

@section('cabecalho')
Séries
@endsection

@section('conteudo')
<a href="{{ route('series.create')}}" class="btn btn-dark mb-2">Adicionar</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach($series as $serie)
        <tr>
            <td>{{$serie->name}}</td>
            <td>
                <form action="{{route('series.destroy', $serie)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <Button class="btn btn-danger" type="submit">Apagar</Button>
                </form>
            </td>
        <tr>

         @endforeach

    </tbody>
</table>
<ul class="list-group">


</ul>


@endsection
