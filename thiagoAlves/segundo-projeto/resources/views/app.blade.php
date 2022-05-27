<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>@yield('title')</title>

    <style>
        @keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}
        </style>

  </head>
  <body style="background: linear-gradient(-45deg, #292928, #181918, #0f0303, #000000);
  background-size: 400% 400%;
  animation: gradient 15s ease infinite;
  height: 100vh;">
{{-- <body style="background-color:#222222"> --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('series.index') }}"><img src="https://www.alfaumuarama.edu.br/fau/images/logop.png?v=1" width="50%"></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav text-light">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('series.index') }}">Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('series.create') }}">Nova Série</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('series.index') }}">Séries</a>
        </li>
      </ul>
    </div>
  </nav>

    <div class="container">
        @yield('content')
    </div>


    {{-- <footer class="footer bg-light fixed-bottom p-4 shadow-lg">
        <p class="text-center m-2">© Copyright - {{ date("Y") }} Desenvolvido por <a href="https://github.com.bt/thiaalves">thiago.alves</a></p>
    </footer> --}}



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  </body>
</html>
