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
                <a class="nav-link active" aria-current="page" href="{{route('LoginIndex')}}">Iniciar sesión</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('Rebajas')}}">Rebajas</a>
              </li>
              <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('ProductosIndex')}}">¿No encuentras un producto?<br> da click aqui(:</a>
            </li> 
     
                <li class="nav-item">
                    @auth
                        <span class="nav-link active">Usuario: <br>{{ auth()->user()->username }}</span>
                    @endauth
                </li>
              <li class="nav-item">
                @auth
                    <form action="{{ route('LogoutStore') }}" method="post">
                        @csrf
                        <button type="submit" class="nav-link active btn btn-danger">Cerrar sesión</button>
                    </form>
                @endauth
            </li>
            </ul>
          </div>
        </div>
      </nav>