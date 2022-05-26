<table class="table">
    <thead>
        <tr>
            <th scope="col">{{$serie->name}}</th>

        </tr>
    </thead>
    <tbody>
        @foreach($temporadas as $temporada)
        <li class="list-group-item d-flex justify-content-between align-itens">
            <a href="/temporadas/{{ $temporada->id }}/episodios">
                Temporada {{ $temporada->numero }} 
            </a>
            <span class="badge bg-secundary">
                {{ $temporada->getEpisodiosAssistidos()->count() }} / {{ $temporada->episodios->count() }}           
            </span>
        </li>

         @endforeach

    </tbody>
</table>
