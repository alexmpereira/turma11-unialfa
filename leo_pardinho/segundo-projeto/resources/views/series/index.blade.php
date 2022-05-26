@extends('app')
@section('title', 'Series')
@section('cabecalho','Netflix')
@section('conteudo')
    <h1>Séries Disponíveis</h1>

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
         
                <td class="list-group-item d-flex justify-content-between align-items-center mt-5">
                    {{ $serie->nome }}
                </td>
                <td>
                <form action="{{ route('serie.destroy', $serie) }}" method="POST">
                        @csrf
                        @method('DELETE')
                    <button class="btn btn-danger"
                            type="submit"
                            onclick="return confirm('Deseja realmente deletar esta série?')"
                    >
                            Excluir
                    </button>
                </form>
                <span class="d-flex"> 
                        <a href="serie/{{ $serie->id }}/temporadas" class="btn btn-dark mt-1">
                            Temporadas
                        </a>
                </span>

                <div class="input-group w-50" hidden id="nome-serie-{{ $serie->id }}">
                    <input type="text" class="form-control"  id="input-nome-serie-{{ $serie->id }}" value="{{ $serie->nome }}">
                    <div class="input-group-append">
                        <button class="btn btn-success mt-1" onclick="editarSerie({{ $serie->id }})">
                            Salvar
                        </button>
                        @csrf
                    </div>
                </div>


                <button class="btn btn-warning mt-1" onclick="toggleInput({{ $serie->id }})">
                    Editar Nome
                </button>
                </td>

            </tr>
            @endforeach
        </tbody>
       
    </table>

    <a class="btn btn-danger mb-2" href="{{ route('serie.create') }}">Adicionar Série</a>

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

            const url = `serie/${serieId}/editaNome`;
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