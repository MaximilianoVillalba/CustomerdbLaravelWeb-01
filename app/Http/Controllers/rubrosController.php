<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\rubros;

use App\Models\busquedas as ModelsBusquedas;

class rubrosController extends Controller
{
    public function index()
    {
        $rubros = rubros::get();
        return view('rubros.index', compact('rubros'));
    }

    public function show($idRubro)
    {
        $datos['busquedas'] = ModelsBusquedas::obtenerbusquedaPorRubro($idRubro);
        return view('rubros.show', $datos);
    }

    public function busquedasPorRubro()
    {
        $datos['rubros'] = rubros::get();
        return view('rubros.rubros_busquedas', $datos);
    }

    public function mostrarBusquedas()
    {
        $datosRubro = request()->all();
        $datos['busquedas'] = ModelsBusquedas::obtenerbusquedaPorRubro($datosRubro['idRubro']);
        return view('rubros.busquedas_por_rubro', $datos);
    }
}