<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>@yield('title')</title>
  </head>
  <body style="background: rgb(54,203,199);
  background: linear-gradient(63deg, rgba(54,203,199,1) 14%, rgba(96,222,110,1) 62%, rgba(125,236,49,1) 100%);">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('series.index') }}"><img src="https://www.alfaumuarama.edu.br/fau/images/logop.png?v=1" width="50%"></a>
  </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>


    <footer class="footer bg-light fixed-bottom p-4 shadow-lg">
        <p class="text-center m-2">© Copyright - {{ date("Y") }} Desenvolvido por <a href="https://github.com.bt/thiaalves">thiago.alves</a></p>
    </footer>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>
  </body>
</html>
