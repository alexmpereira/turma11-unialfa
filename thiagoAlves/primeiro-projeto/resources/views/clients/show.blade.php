<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Unialfa</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><span class="lnr lnr-smile"></span> Unialfa</a>

  </div>
</nav>
   <div class="container pt-5">
       <div class="card">
           <div class="card-header">
               Detalhes do Cliente {{$client->nome}}
            </div>
            <div class="card-body">
                <p><strong>ID</strong>: {{$client->id}}</p>
                <p><strong>Nome</strong>: {{$client->nome}}</p>
                <p><strong>Endereço</strong>: {{$client->endereco}}</p>
                <p><strong>Observação</strong>: {{$client->observacao}}</p>
                <br>
                <a class="btn btn-success" href="{{route('clients.index')}}">Voltar para a lista</a>

            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>
  </body>
</html>
