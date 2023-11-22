<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Crud productos</title>
        @vite(['resources/js/app.js'])
       
    </head>
    <body>
        @include('partials.navegacion')
        @if (session('status'))
            <div class="container mt-3" id="statusMessage">
            <div class="alert alert-success" role="alert">
            {{ session('status') }}
            </div>
            </div>
            <script>
            setTimeout(function() {
                var statusMessage = document.getElementById('statusMessage');
                if (statusMessage) {
                    statusMessage.classList.add('hidden');
                    setTimeout(function() {
                        statusMessage.style.display = 'none';
                    }, 500);
                }
            }, 3000);
            </script>
        @endif
        @yield('container')
        @yield('js')
       <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <span class="text-gray fs-5 fw-bold"> Modern room</span>
           </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('Principal')}}">Inicio</a>
                  </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="iniciarsesion.html">Iniciar sesión</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('Rebajas')}}">Rebajas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('Rebajas')}}">
                  <img src="./img/carrito.png" alt="carrito">
                </a>
              </li>    
            </ul>
          </div>
        </div>
      </nav>
      

    <form class="bodyis formis" action="/login" method="post">
        <div class="image-container">
            <img src="/img/modauno.png" alt="">
        </div>
        <div>
          <label for="username">Nombre de usuario:</label><br>
          <input type="text" id="username" name="username" required>
        </div>
        <div>
          <label for="password">Contraseña:</label><br>
          <input type="password" id="password" name="password" required><br>
        </div>
        <div>
          <input type="submit" value="Iniciar sesión">
        </div>
    </form>
    
    
    <footer class="w-100 f-flex justify-content-center aling-items-center footer">
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
