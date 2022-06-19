@extends('app')
@section('title', 'Series')
@section('cabecalho','Netflix')
@section('content')
    <h1>Disponible series</h1>

    @if(!empty($mensagem))
    <div class="alert alert-success">
        {{ $mensagem }}
    </div>
    @endif
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col 10">Name</th>
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
                <form action="{{ route('series.destroy', $serie) }}" method="POST">
                        @csrf
                        @method('DELETE')
                    <button class="btn btn-danger"
                            type="submit"
                            onclick="return confirm('you sure')"
                    >
                            Delete
                    </button>
                </form>
                <span class="d-flex"> 
                        <a href="series/{{ $serie->id }}/temporadas" class="btn btn-info btn-sm ml-1">
                            Season
                        </a>
                </span>

                <div class="input-group w-50" hidden id="nome-serie-{{ $serie->id }}">
                    <input type="text" class="form-control"  id="input-nome-serie-{{ $serie->id }}" value="{{ $serie->nome }}">
                    <div class="input-group-append">
                        <button class="btn btn-warning" onclick="editarSerie({{ $serie->id }})">
                            Save
                        </button>
                        @csrf
                    </div>
                </div>


                <button class="btn btn-info btn-sm mr-1" onclick="toggleInput({{ $serie->id }})">
                    Edit Name
                </button>
                </td>

            </tr>
            @endforeach
        </tbody>
       
    </table>

    <a class="btn btn-dark mb-2" href="{{ route('series.create') }}">Add new serie</a>

    <script>
        function toggleInput(serieId){
            const nomeSerieEl = document.getElementById(`nome-serie-${serieId}`);
            const inputSerieEl = document.getElementById(`input-nome-serie-${serieId}`);

            if (nomeSerieEl.hasAttribute('hidden')) {
                nomeSerieEl.removeAttribute('hidden');
               
            } else {
                inputSerieEl.hidden = true;
            }
        }

        function editarSerie(serieId){
            let formData = new FormData();
            const nome = document.querySelector(`#nome-serie-${serieId} > input` ).value;
            const token = document.querySelector(`input[name="_token"]`).value;
            formData.append('nome', nome);
            formData.append('_token', token);

            const url = `series/${serieId}/editaNome`;
            fetch(url,{
                method: 'POST',
                body: formData
            }).then(()=>{
                toggleInput(serieId);
                document.getElementById(`nome-serie-${serieId}`).textContent = nome ;
                document.getElementById(`list-nome-serie-${serieId}`).textContent = nome ;
            });
        }
    </script>
@endsection