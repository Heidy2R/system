<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuariosrole
 *
 * @property $id
 * @property $user_id
 * @property $rol_id
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Role $role
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuariosrole extends Model
{
    
    static $rules = [
		'user_id' => 'required',
		'rol_id' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','rol_id','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function role()
    {
        return $this->hasOne('App\Role', 'id', 'rol_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
    

}
