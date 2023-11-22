<?php

namespace App\Http\Controllers;

use App\Models\PreguntaRespuesta;
use Illuminate\Http\Request;

class ChatBotController extends Controller
{
    public function responderPregunta(Request $request)
    {
        $pregunta = $request->input('pregunta');

        $respuesta = PreguntaRespuesta::where('pregunta', $pregunta)->first();

        if ($respuesta) {
            return response()->json(['respuesta' => $respuesta->respuesta]);
        } else {
            return response()->json(['respuesta' => 'Lo siento, no tengo una respuesta para esa pregunta.']);
        }
    }
}

