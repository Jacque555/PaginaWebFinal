<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreguntaRespuesta extends Model
{
    use HasFactory;

    protected $table = 'respuestas'; // Especificar el nombre de la tabla si no sigue la convención por defecto

    protected $fillable = [
        'pregunta',
        'respuesta',
    ];

}
