<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Moda Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
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
                        <a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="iniciarsesion.html">Iniciar sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="rebajas.html">Rebajas</a>
                    </li>
              </li>  
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <section class="product-list">
            <h2>Tus productos seleccionados</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productosSeleccionados as $producto)
                        <tr>
                            <td><img src="{{ $producto->imagen }}" alt="{{ $producto->nombre }}"></td>
                            <td>{{ $producto->nombre }}</td>
                            <td>{{ $producto->precio }}</td>
                            <td>{{ $producto->cantidad }}</td>
                            <td>
                                <form action="{{ route('carrito.eliminar', ['id' => $producto->id]) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </main>

    <section class="featured-products">
        <h2>Productos que te podrían interesar</h2>
    </section>

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
