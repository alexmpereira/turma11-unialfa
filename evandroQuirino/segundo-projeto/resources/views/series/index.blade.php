@extends('app')

@section('title', 'Lista de Series')

@section('content')

    @if (!empty($mensagem))
        <div class="alert alert-success">{{$mensagem}}</div>
    @endif

    <h1>Lista de Series</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($series as $serie)
                <tr>
                    <th scope="row">{{ $serie->id }}</th>
                    <td>
                       <span id="nome-serie={{$serie->id}}"> {{ $serie->nome }}</span>
                    </td>
                    <td>
                        <span class="d-flex">
                            <a class="btn btn-info btn-sm me-1" href="{{ route('temporadas.index', $serie->id) }}">
                                Temporadas
                            </a>
                            <form action="{{ route('series.destroy', $serie) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit"
                                    onclick="return confirm('Deseja realmente deletar essa série?')">
                                    Delete
                                </button>
                            </form>

                            <div class="input-group w-50" hidden id="nome-serie={{$serie->id}}">
                            <input type="text" class="form-control" value="{{ $serie->nome }}">
                            <div class="input-group-append">
                                <button 
                                class="btn btn-primary"
                                onclick="editarSerie({{ $serie->id }})"
                                >
                                    Salvar
                                </button>
                            </div>
                            </div>
                            @csrf
                            <button 
                                class="tbn btn-warning btn-sm mr-1"
                                onclick="toggleInput({{ $serie->id }})"
                            >
                                Editar Nome
                            </button>
                        </span>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script>
        function toggleInput(serieId) {
            const nomeSerieEl = document.getElementById(`nome-serie-${serieId}`);
            const inputSerieEl = document.getElementById(`input-nome-serie-${serieId}`);

            if (nomeSerieEl.hasAttribute('hidden')){
                nomeSerieEl.removeAttribute('hidden');
            } else {
                nomeSerieEl.hidden =  true;
                
            }
        }

        function editarSerie(serieId) {
            let formData = new formData();
            const nome = document.querrySelector(`#nome-serie-${serieId} > input`).value;
            const token = document.querrySelector(`input[name="_token"]`).value;

            formData.append('nome', nome);
            formData.append('_token', token);

            const url = `series/${serieId}/editarNome`;
            fech(url,{
                method: 'POST',
                body: formData
            }).then(() => {
                toggleInput(serieId);
                document.getElementById(`nome-serie-${serieId}`).textContent = nome;
                document.getElementById(`list-nome-serie-${serieId}`).textContent = nome;
            });
            
        }
    </script>


    <a class='btn btn-success' href="{{ route('series.create') }}">Nova Serie</a>

@endsection
