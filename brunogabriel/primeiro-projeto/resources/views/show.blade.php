<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Detalhes do Cliente</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">UniAlfa</a>
        </div>
    </nav>

    <div class="container">
       <div class="card">
           <div class="card-header">
                Detalhes do Cliente {{ $client->nome }}
           </div>

           <div class="card-body">
                <p><strong>ID</strong>: {{ $client->id }}</p>
                <p><strong>Nome</strong>: {{ $client->nome }}</p>
                <p><strong>Endereço</strong>: {{ $client->endereco }}</p>
                <p><strong>Observação</strong>: {{ $client->observacao }}</p>
                <br>
                <a class="btn btn-success" href="{{ route('clients.index') }}">
                    Voltar para a lista de clientes
                </a>
           </div>
       </div>
    </div>
  </body>
</html>