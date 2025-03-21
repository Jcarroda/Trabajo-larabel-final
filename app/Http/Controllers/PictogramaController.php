<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Imagenes;

use App\Models\Agenda;

class PictogramaController extends Controller
{
    public function ej1()
    {
        $pictogramas = Imagenes::all();

        return view('ej1', compact('pictogramas'));
    }

    public function ej2()
    {
        $pictogramas = Imagenes::all();

        return view('ej2', compact('pictogramas'));
    }

    public function ej2Añadir(Request $request)
    {
        $fecha = $request->input('fecha');
        $hora = $request->input('hora');
        $idPersona = $request->input('idPersona');
        $pictogramaId = $request->input('pictograma_id');

        $agenda = Agenda::create([
            'fecha' => $fecha,
            'hora' => $hora,
            'idpersona' => $idPersona,
            'idimagen' => $pictogramaId,
        ]);
        
        $pictogramas = Imagenes::all();
        return view('ej2', compact('pictogramas'));
    }
}
