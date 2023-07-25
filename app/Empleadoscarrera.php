<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleadoscarrera
 *
 * @property $id
 * @property $empleado_id
 * @property $carrera_id
 * @property $periodo_id
 * @property $fecha
 * @property $estado
 * @property $created_at
 * @property $updated_at
 * @property $usuariomodifica
 *
 * @property Carrera $carrera
 * @property Empleado $empleado
 * @property Periodo $periodo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleadoscarrera extends Model
{
    
    static $rules = [
		'empleado_id' => 'required',
		'carrera_id' => 'required',
		'periodo_id' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['empleado_id','carrera_id','periodo_id','fecha','estado','usuariomodifica'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function carrera()
    {
        return $this->hasOne('App\Carrera', 'id', 'carrera_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empleado()
    {
        return $this->hasOne('App\Empleado', 'id', 'empleado_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function periodo()
    {
        return $this->hasOne('App\Periodo', 'id', 'periodo_id');
    }
    

}
