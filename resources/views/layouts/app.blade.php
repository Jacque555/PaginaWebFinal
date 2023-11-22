<!DOCTYPE html>
    

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Tus productos</title>
        @vite(['resources/js/app.js'])
       <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        @include('partials.navegacion')
        <div id="imagenSuperior" class="animated-image">
        <img src="{{ asset('img/modacuatro.png') }}" class="img-fluid w-100" alt="Imagen de ropa">
      </div>
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