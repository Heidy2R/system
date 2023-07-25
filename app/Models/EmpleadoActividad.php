<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmpleadoActividad extends Model
{
    protected $table = 'empleadoactividad';
    protected $primaryKey = 'idEmpActivid';
    public $timestamps = false;

    protected $fillable = [
        'idempleado',
        'nombreEmpleado',
        'actividad',
        'fechaInicio',
        'fechafin',
        'estado',
    ];

    // Otras relaciones o métodos si es necesario...
}
