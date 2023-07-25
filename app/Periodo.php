<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Periodo
 *
 * @property $id
 * @property $nombre
 * @property $fechainicio
 * @property $fechafin
 * @property $estado
 * @property $created_at
 * @property $updated_at
 * @property $usuariomodifica
 *
 * @property Empleadoscarrera[] $empleadoscarreras
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Periodo extends Model
{
    
    static $rules = [
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','fechainicio','fechafin','estado','usuariomodifica'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empleadoscarreras()
    {
        return $this->hasMany('App\Empleadoscarrera', 'periodo_id', 'id');
    }
    

}
