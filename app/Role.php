<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 *
 * @property $id
 * @property $rol
 * @property $created_at
 * @property $updated_at
 *
 * @property Usuariosrole[] $usuariosroles
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Role extends Model
{
    
    static $rules = [
		'rol' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['rol'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usuariosroles()
    {
        return $this->hasMany('App\Usuariosrole', 'rol_id', 'id');
    }
    

}
