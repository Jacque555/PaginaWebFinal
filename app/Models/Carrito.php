<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;

    protected $table = 'carrito';

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'cantidad',
        'imagen'
        // Agrega más campos si es necesario
    ];
}


