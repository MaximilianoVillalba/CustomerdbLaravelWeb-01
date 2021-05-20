<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class inscripciones extends Model
{
    use HasFactory;

    protected $table = 'inscripciones';

    protected $primaryKey = 'idInscripcion';

    protected $fillable = array('idBusqueda', 'fecha', 'apellido', 'nombre');

    protected $hidden = ['created_at', 'updated_at'];

    public static function inscripcionesPorBusqueda($idBusqueda)
    {
        $inscripciones = DB::select('SELECT * FROM inscripciones WHERE idBusqueda=' . $idBusqueda . '');
        return $inscripciones;
    }
}