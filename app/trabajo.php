<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trabajo extends Model
{
    protected $fillable = [
        'id_actividad', 'nombre_trabajo', 'org_nombre', 'tutor_nombre', 'numero_registro', 'fecha_inicio','fecha_termino', 'estado' 
    ];
}
