<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ciudad
 *
 * @property $id
 * @property $Nombre_ciudad
 *
 * @property Direccion[] $direccions
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ciudad extends Model
{
  public $timestamps = false;
    static $rules = [
		'Nombre_ciudad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre_ciudad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function direccions()
    {
        return $this->hasMany('App\Models\Direccion', 'Ciudad_idCiudad', 'id');
    }
    

}
