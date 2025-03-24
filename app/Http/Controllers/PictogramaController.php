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
        $agendas = Agenda::all();

        return view('ej2', compact('pictogramas'));
    }
    public function ej3()
    {
        $pictogramas = Imagenes::all();

        return view('ej3', compact('pictogramas'));
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

    public function mostrarAgenda(Request $request)
    {
        $fecha = $request->input('fecha');
        $persona = $request->input('persona');

        $agenda = Agenda::select('imagenes.imagen', 'agenda.fecha', 'agenda.hora')
            ->join('imagenes', 'imagenes.idimagen', '=', 'agenda.idimagen')
            ->where('agenda.idpersona', $persona)
            ->where('agenda.fecha', $fecha)
            ->get();

        return view('mostrar-agenda', compact('agenda', 'fecha', 'persona'));
    }
}
