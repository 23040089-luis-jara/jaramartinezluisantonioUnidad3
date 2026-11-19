<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatBotController extends Controller
{
    public function respuesta(Request $request)
    {
        $mensaje = strtolower($request->mensaje);

        if(
            str_contains($mensaje,'etica') ||
            str_contains($mensaje,'investigacion')
        ){
            $respuesta = "La ética en investigación es el conjunto de principios y normas que garantizan que los estudios científicos se realicen de manera responsable, respetando los derechos, la dignidad y el bienestar de las personas participantes. Su propósito es asegurar que los investigadores actúen con honestidad, transparencia y responsabilidad durante todas las etapas del proceso científico.";
        }

        elseif(
            str_contains($mensaje,'medicina')
        ){
            $respuesta = "La medicina es una disciplina científica dedicada a la prevención, diagnóstico, tratamiento y rehabilitación de enfermedades. Su objetivo principal es preservar la salud y mejorar la calidad de vida de las personas mediante el uso de conocimientos biológicos, clínicos y tecnológicos.";
        }

        elseif(
            str_contains($mensaje,'humanidades')
        ){
            $respuesta = "Las humanidades son un conjunto de disciplinas que estudian al ser humano, su cultura, historia, pensamiento y comportamiento. En el ámbito médico contribuyen a formar profesionales con sensibilidad social, empatía y capacidad para comprender las necesidades humanas de los pacientes.";
        }

        elseif(
            str_contains($mensaje,'hepatitis')
        ){
            $respuesta = "La hepatitis es una inflamación del hígado causada por virus, sustancias tóxicas o enfermedades autoinmunes. Puede afectar el funcionamiento normal del organismo y provocar síntomas como cansancio, dolor abdominal, fiebre e ictericia.";
        }

        else{
            $respuesta = "Puedo ayudarte con temas relacionados con ética en investigación, medicina, humanidades, hepatitis, registros, formatos y trámites del comité.";
        }

        return response()->json([
            'respuesta' => $respuesta
        ]);
    }
}