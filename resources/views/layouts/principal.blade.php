<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Moda Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


  </head>
  <body>
  @include('partials.menuprincipal')
      
<!-- Imagen principal -->

<div id="imagenSuperior" class="animated-image">
  <img src="./img/ropa.png" class="img-fluid w-100" alt="Imagen de ropa">
</div>


<!-- Servicios -->

<section class="container-fluid">
  <div class="row w-75 mx-auto fila">
    <div class="my-3 col-lg-4 col-md-4 col-sm-12 d-flex wrap" id="pelicula">
      <a href="contacto.html">
        <img src="{{ asset('img/1.png') }}"  alt="">
      </a>
    </div>
    <div class="my-3 col-lg-4 col-md-4 col-sm-12 d-flex wrap" id="pelicula">
      <img src="{{ asset('img/2.png') }}" alt="">
    </div>
    <div class="my-3 col-lg-4 col-md-4 col-sm-12 d-flex wrap" id="pelicula">
        <img src="{{ asset('img/3.png') }}" alt="">
    </div>

  </div>
  <div class="row w-75 mx-auto fila">
    <div class="my-3 col-lg-4 col-md-4 col-sm-12 d-flex wrap"  id="pelicula">
      <img src="img/4.png">
    </div>
    <div class="my-3 col-lg-4 col-md-4 col-sm-12 d-flex wrap"  id="pelicula">
      <img src="./img/5.png">
    </div>
    <div class="my-3 col-lg-4 col-md-4 col-sm-12 d-flex wrap" id="pelicula">
      <img src="./img/6.png">
    </div>
  </div>
</section>

<!-- footer -->

<!-- footer -->
<footer class="w-100 f-flex justify-content-center aling-items-center ">
  <div class="redes pt-4">
        <a href="https://www.facebook.com/"><img src="/img/facebook.jpg" alt="" width="30" height="30"></a>
          <a href="https://twitter.com/"><img src="/img/twitter.jpg" alt="" width="30" height="30"></a>
          <a href="https://www.instagram.com/"><img src="/img/instagram.jpg" alt="" width="30" height="30"></a>
  </div>
  <p class="fs-5 px-3 pt-3">Modern room &copy; Todos los derechos reservados 2023</p>
 </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>