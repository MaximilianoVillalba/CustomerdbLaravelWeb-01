<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class busquedas extends Model
{
    use HasFactory;

    protected $atable = 'busquedas';

    protected $primaryKey = 'idBusqueda';

    protected $fillable = array('idRubro', 'empresa', 'titulo', 'descripcion');

    protected $hidden = ['created_at', 'updated_at'];

    public static function obtenerbusquedaPorRubro($idRubro)
    {
        $busquedas = DB::select('SELECT * FROM busquedas WHERE idRubro=' . $idRubro . '');
        return $busquedas;
    }

    public static function obtenerPrueba($idRubro)
    {
        $busquedas = DB::select('SELECT * FROM busquedas WHERE idRubro=' . $idRubro . '');
        $resp = json_encode($busquedas);
        return  $resp;
    }
}