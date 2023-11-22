@extends('layouts.app')

@section('container')
    <h1 class="text-center">Editar Producto</h1>
    <div class="container">
        <form action="{{ route('ProductosUpdate', $producto->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="nombre" class="form-label">Nombre</label>
                <input name="nombre" id="nombre" class="form-control" value="{{ old('nombre', $producto->nombre) }}">
                @error('nombre')
                    <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="descripcion" class="form-label">Descripción</label>
                <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{ old('descripcion', $producto->descripcion) }}">
                @error('descripcion')
                    <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="precio" class="form-label">Precio</label>
                <input type="text" name="precio" id="precio" class="form-control" value="{{ old('precio', $producto->precio) }}">
                @error('precio')
                    <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="text" name="cantidad" id="cantidad" class="form-control" value="{{ old('cantidad', $producto->cantidad) }}">
                @error('cantidad')
                    <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="imagen" class="form-label">Imagen</label>
                <input type="file" name="imagen" id="imagen" class="form-control">
                @error('imagen')
                    <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mt-2">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <a href="{{ route('ProductosIndex') }}" class="btn btn-danger">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
