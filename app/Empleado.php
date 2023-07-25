<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 *
 * @property $id
 * @property $codigoempleado
 * @property $apellidos
 * @property $nombres
 * @property $user_id
 * @property $fechaingreso
 * @property $estado
 * @property $created_at
 * @property $updated_at
 * @property $usuariomodifica
 *
 * @property Empleadoscarrera[] $empleadoscarreras
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleado extends Model
{
    
    static $rules = [
		'user_id' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigoempleado','apellidos','nombres','user_id','fechaingreso','estado','usuariomodifica'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empleadoscarreras()
    {
        return $this->hasMany('App\Empleadoscarrera', 'empleado_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
    

}
