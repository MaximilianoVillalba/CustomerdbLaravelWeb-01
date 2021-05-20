<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\busquedas;

use App\Models\inscripciones;

class inscripcionController extends Controller
{
    public function index()
    {
        $datos['busquedas'] = busquedas::get();
        return view('inscripcion.index', $datos);
    }

    public function store()
    {
        $datosInscripto = request()->all();

        $succes =  inscripciones::insert($datosInscripto);

        return view('inscripcion.carga_inscripto')->with(['succes' => $succes]);
    }

    public function inscripcionesLaborales()
    {
        $datos['busquedas'] = busquedas::get();
        return view('inscripcion.busquedas_laborales', $datos);
    }

    public function mostrarInscripciones()
    {
        $datosInscripto = request()->all();

        $datos['inscripciones'] = inscripciones::inscripcionesPorBusqueda($datosInscripto['idBusqueda']);

        return view('inscripcion.show_inscripciones', $datos);
    }
}