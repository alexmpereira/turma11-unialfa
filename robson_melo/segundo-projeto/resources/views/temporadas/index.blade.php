<table class="table">
    <thead>
        <tr>
            <th scope="col">{{$serie->name}}</th>

        </tr>
    </thead>
    <tbody>
        @foreach($temporadas as $temporada)
        <tr>
            <td>{{$temporada->numero}}</td>

        <tr>

         @endforeach

    </tbody>
</table>
