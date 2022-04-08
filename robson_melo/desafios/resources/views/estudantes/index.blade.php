@foreach ($estudantes as $estudante)
<p>{{$estudante->id}}</p>
<p>{{$estudante->nome}}</p>
<p>{{$estudante->cpf}}</p>
<p>{{$estudante->nascimento}}</p>
<hr>

@endforeach
