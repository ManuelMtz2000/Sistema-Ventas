<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">

    <!-- Bootstrap CSS -->
    <link href="{{ asset("/css/bootstrap.css") }}" rel="stylesheet">
    <link href="{{ asset("/css/styles.css") }}" rel="stylesheet" >
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;500&display=swap" rel="stylesheet">
    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light nav">
      <div class="container-fluid">
        <a class="navbar-brand logo" href="/home">
          <img src="{{ asset('/images/platinum sell (small).svg')}}" alt="PlatinumSell" width="180">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item item">
              <a class="nav-link" href="/home">Inicio</a>
            </li>
            <li class="nav-item item" style="margin-right:2em;">
              <a class="nav-link" href="#">Ventas</a>
            </li>
            <li class="nav-item item" style="margin-right:2em;">
              <a class="nav-link" href="/inventario">Inventario</a>
            </li>
            <li class="nav-item item" style="margin-right:2em;">
              <a class="nav-link" href="#">Exportar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
      @yield('contenido')
    <footer class="foot">
      <div class="container">
        <p class="paragraph">Copyright © by Manuel Martínez 2021</p>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>