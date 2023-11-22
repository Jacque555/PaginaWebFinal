@extends('layouts.app')
@section('container')
    <br><h1 class="text-center">¿No encuentras un producto?</h1>
    <div class="text-center">
        <p>Solo llena el siguiente formulario, te llegará un correo confirmando si aún está disponible.</p>
    </div>
    <div class="container bg-light">
        <form action="{{ route('productosStore') }}" class="bodyis formis" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nombre" class="form-label">Correo electronico</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre') }}">
                @error('nombre')
                    <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="descripcion" class="form-label">Descripción del producto</label>
                <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{ old('descripcion') }}">
                @error('descripcion')
                    <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="precio" class="form-label">Precio aproximado</label>
                <input type="text" name="precio" id="precio" class="form-control" value="{{ old('precio') }}">
                @error('precio')
                    <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="text" name="cantidad" id="cantidad" class="form-control" value="{{ old('cantidad') }}">
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
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <a href="{{ route('ProductosIndex') }}" class="btn btn-danger">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
