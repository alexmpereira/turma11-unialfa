@extends('layout')

@section('cabecalho')
Séries
@endsection

@section('conteudo')
@if(!empty($mensagem))
<div class="alert alert-success">
    {{$mensagem}}
</div>
@endif
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
            <td>
                {{$serie->name}}
                <a href="/series/{{$serie->id}}/temporadas" class="btn btn-info btn-sm mr-1">Temporadas</a>

                <button
                class="btn btn-info btn-sm mr1"
                onclick="toggleInput({{$serie->id}})"
                >
                Editar nome
                </button>

            </td>

            <td>
                <form action="/series/{{$serie->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <Button class="btn btn-danger" type="submit">Apagar</Button>
                </form>

            </td>
        <tr>

         @endforeach

    </tbody>
</table>
<script>
    function toggleInput(serieId){
        console.log(serieId);
    }
    //function editarSerie(serieId)

</script>



@endsection
