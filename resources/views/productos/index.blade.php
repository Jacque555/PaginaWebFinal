@extends('layouts.app')
@section('container')
    <br><h1 class="text-center">Tu lista de deseos</h1>
    <div class="text-center">
        <p>Si quieres algún producto que no se encuentra en la página, solo da click en "Nuevo" y llena nuestro formulario para darte más información del producto</p>
    </div>
    <div class="container">
        <form action="{{ route('ProductosCreate') }}" method="get">
            <button class="btn btn-primary mb-2" type="submit"><span class="p-4">Nuevo</span></button>
        </form>
        <table class="table table-responsive table-striped">
           <tr class="table-primary" style="text-align: center; vertical-align: middle;">
            <td>ID</td>
            <td>Correo electrónico</td>
            <td>Descripción de la prenda</td>
            <td>Precio aproximado</td>
            <td>Cantidad que necesitas</td>
            <th>Anexar imagen</th>
            <td>Acciones</td>
        </tr>
            @foreach ($productos as $producto)
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>{{ $producto->precio }}</td>
                    <td>{{ $producto->cantidad }}</td>
                    <td>{{ $producto->imagen }}</td>
                    <td>
                        <div class="d-flex">
                            <form class="formulario-eliminar" action="{{ route('ProductosDestroy', $producto->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger mx-1">Eliminar</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $productos->links('pagination::bootstrap-5') }}
    </div>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const formularios = document.querySelectorAll('.formulario-eliminar');

        formularios.forEach(formulario => {
            formulario.addEventListener('submit', function(e) {
                e.preventDefault();
                console.log('Formulario enviado');
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: '¡Esta acción no es reversible!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sí, eliminar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        this.submit();
                    }
                });
            });
        });
    });
</script>
@endsection
