@extends('app')
<<<<<<< HEAD

@section('title', 'New Client')

@section('content')
   <h1>New Client</h1>
   <form action="{{ route('clients.store') }}" method="POST">
    @csrf
       <div class="mb-3">
           <label for="name" class="form-label">Name</label>
           <input type="text" class="form-control" name="name" id="name" placeholder="Type your name">
       </div>
       <div class="mb-3">
           <label for="address" class="form-label">Address</label>
           <input type="text" class="form-control" name="address" id="address" placeholder="Type your address">
       </div>
       <div class="mb-3">
           <label for="observation" class="form-label">Observation</label>
           <textarea class="form-control" name="observation" id="observation" placeholder="Type your observation"></textarea>
       </div>

       <div class="d-flex">
           <button class="btn btn-success">Send</button>
           <a href="{{ route('clients.index') }}" class="btn btn-danger ms-auto">Cancel</a>
       </div>
   </form>
@endsection

=======
@section('title', 'Novo Cliente')
@section('content')

        <h1>Novo Cliente</h1>
        <form action="{{ route('clients.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome" required>
            </div>
            <div class="mb-3">
                <label for="endereco" class="form-label">Endereço:</label>
                <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Digite o endereço" required>
            </div>
            <div class="mb-3">
                <label for="observacao" class="form-label">Observação:</label>
                <textarea type="text" class="form-control" name="observacao" id="observacao" placeholder="Digite a Observação" required></textarea>
            </div>

            <button class="btn btn-success">Enviar</button>
        </form>
@endsection
>>>>>>> dc6d2954af9e7d7d3fe3866d42dcdaed0a358a3f
