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
                <a class="nav-link active" aria-current="page" href="{{route('Rebajas')}}">Rebajas</a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('RegistroIndex')}}">¡Regístrate!</a>
            </li>    
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('ProductosIndex')}}">¿No encuentras un producto?<br> da click aqui(:</a>
            </li>         
            </ul>
          </div>
        </div>
      </nav>
      

    <form class="bodyis formis" action="{{route('LoginStore')}}" method="post">
            @csrf
        <h1 class="text-center ">Iniciar sesión</h1>
        <div class="image-container">
            <img src="/img/modauno.png" alt="">
        </div>
        <div>
          <label for="username" class="form-label">Nombre de usuario:</label><br>
          <input type="text" name="username" id="username" class="form-control" value="{{old('username')}}" placeholder="Crea un usuario"><br>
          @error('username')
                    <div style="color:red">{{$message}}</div>
                @enderror
        </div>

        <div class="form-group">
          <label for="password" class="form-label">Contraseña:</label><br>
          <input type="password" name="password" id="password" class="form-control" placeholder="Escribe tu contraseña"><br>
            @error('password')
                <div style="color:red">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group mt-2">
                <button class="btn btn-light" type="submit">Iniciar sesión</button>
            </div>
    </form>
    
    
    <br><footer class="w-100 f-flex justify-content-center aling-items-center footer">
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