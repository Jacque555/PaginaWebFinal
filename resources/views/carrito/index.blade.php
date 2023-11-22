<!-- resources/views/carrito/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Carrito de Compras</h1>

    @if (count($productos) > 0)
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->descripcion }}</td>
                        <td>{{ $producto->precio }}</td>
                        <td>{{ $producto->cantidad }}</td>
                        <td>{{ $producto->imagen }}</td>
                        <td>
                            <form action="{{ route('carrito.actualizar', $producto->id) }}" method="post">
                                @csrf
                                @method('PATCH')
                                <input type="number" name="cantidad" value="{{ $producto->cantidad }}">
                                <button type="submit">Actualizar</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('carrito.eliminar', $producto->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay productos en el carrito.</p>
    @endif

    <a href="{{ route('carrito.agregar') }}">Agregar Producto</a>
@endsection
