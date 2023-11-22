<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro</title>
    @vite(['resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('partials.menuprincipal')

    <!-- Aquí comienza el formulario de registro -->
    
    <form class="bodyis formis" action="/login" method="post">
        <br><br><h1 class="text-center ">Regístrate aquí</h1>
        <div class="image-container">
            <img src="/img/modauno.png" alt="">
        </div>
        
        <form action="{{ route('RegistroStore') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" placeholder="Escribe tu nombre">
                @error('name')
                    <div style="color:red">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="username" class="form-label">Usuario</label>
                <input type="text" name="username" id="username" class="form-control" value="{{ old('username') }}" placeholder="Crea un usuario">
                @error('username')
                    <div style="color:red">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Correo electrónico</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" placeholder="Escribe tu correo electrónico">
                @error('email')
                    <div style="color:red">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" name="password" id="password" class="form-control custom-password" placeholder="Escribe tu contraseña">
            </div>

            <br><div class="form-group">
                <label for="password_confirmation" class="form-label">Repetir contraseña</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Repite tu contraseña">
                @error('password')
                    <div style="color:red">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mt-2">
                <button class="btn btn-primary" type="submit">Crear cuenta</button>
                <a href="{{ route('Dashboard') }}" class="btn btn-danger">Cancelar</a>
            </div>
        </form>
    </form>
    
    <!-- Fin del formulario de registro -->

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
