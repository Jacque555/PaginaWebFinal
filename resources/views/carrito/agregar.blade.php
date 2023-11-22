<!-- resources/views/carrito/agregar.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Agregar Producto al Carrito</h1>

    <form action="{{ route('carrito.agregar') }}" method="post">
        @csrf
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required>
        </div>
        <div>
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" required></textarea>
        </div>
        <div>
            <label for="precio">Precio:</label>
            <input type="number" name="precio" step="0.01" required>
        </div>
        <div>
            <label for="cantidad">Cantidad:</label>
            <input type="number" name="cantidad" required>
        </div>
        <button type="submit">Agregar al Carrito</button>
    </form>
@endsection
