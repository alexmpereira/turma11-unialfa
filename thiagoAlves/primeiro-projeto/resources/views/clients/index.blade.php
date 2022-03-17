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
        <h1 class="text-center pb-3">Lista de Clientes</h1>
        <div class="table-responsive bg-light">
       <table class="table table-hover table-bordered">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Endereço</th>
            <th scope="col">Observação</th>
            <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
            <tr>
            <th scope="row">{{$client->id}}</th>
            <td>
                <a href="{{route('clients.show', $client)}}">
                {{$client->nome}}
                </a>
            </td>
            <td>{{$client->endereco}}</td>
            <td>{{$client->observacao}}</td>
            <td>
                <a href="" class="btn btn-sm btn-info"><span class="lnr lnr-cog"></span></a>
                <a href="" class="btn btn-sm btn-danger"><span class="lnr lnr-trash"></span></a>
            </td>
            </tr>
            @endforeach
        </tbody>
        </table>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>
  </body>
</html>
