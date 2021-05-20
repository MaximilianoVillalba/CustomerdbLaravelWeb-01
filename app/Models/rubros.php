<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rubros extends Model
{
    use HasFactory;

    protected $table = 'rubros';

    protected $primaryKey = 'idRubro';

    protected $fillable = array('descripcion');

    protected $hidden = ['created_at', 'updated_at'];
}