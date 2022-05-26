@extends('layout')

@section('title', 'Séries')
@section('cabecalho', ' Lista de Séries')

@section('conteudo')

    @if (!empty($mensagem))
        <div class="alert alert-success">
            {{ $mensagem }}
        </div>
    @endif

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
                        <span id="list-nome-serie-{{$serie->id}}"> {{ $serie->nome }}
                    </td>
                    <td>

                        <span class="d-flex">
                            <a href="/series/{{ $serie->id }}/temporadas" class="btn btn-info btn-sm mr-1">
                                Temporadas
                            </a>
                            <a class="btn btn-primary btn-sm" href="{{ route('series.edit', $serie) }}">
                                Editar
                            </a>
                            <form action="/series/{{ $serie->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit"
                                    onclick="return confirm('Tem certeza que deseja apagar?')">
                                    Excluir
                                </button>
                            </form>

                            <div class="input-group w-50" hidden id="nome-serie-{{ $serie->id }}">
                                @csrf
                                <input type="text" class="form-control" id="input-nome-serie-{{ $serie->id }}"
                                    value="{{ $serie->nome }}">
                                <div class="input-group-append">

                                    <button class="btn btn-primary" onclick="editarserie({{ $serie->id }})">
                                        Salvar
                                    </button>
                                </div>
                            </div>
                            <button class="btn btn-info bnt-sm mr-1" , onclick="toggleInput({{ $serie->id }})">
                                Editar nome
                            </button>
                        </span>
                    </td>
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('series.create') }}" class="btn btn-dark mb-2">Adicionar</a>
@endsection

<script>
    function toggleInput(serieId) {
        const nomeSerieEl = document.getElementById(`nome-serie-${serieId}`);

        console.log(nomeSerieEl)
        if (nomeSerieEl.hasAttribute('hidden')) {
            nomeSerieEl.removeAttribute('hidden');
        } else {
            nomeSerieEl.hidden = true;
        };
    }

    function editarserie(serieId) {
        let formData = new FormData();

        const nome = document.querySelector(`#input-nome-serie-${serieId}`).value;
        const token = document.querySelector(`input[name="_token"]`).value;

        formData.append('nome', nome);
        formData.append('_token', token);

        const url = `series/${serieId}/editaNome`

        fetch(url, {
            method: 'POST',
            body: formData
        }).then(() => {
            toggleInput(serieId);
            document.getElementById(`nome-serie-${serieId}`).textContent = nome;
            document.getElementById(`list-nome-serie-${serieId}`).textContent = nome;
        })
    }
</script>
