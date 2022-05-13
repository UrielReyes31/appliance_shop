<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Colonium
 *
 * @property $id
 * @property $Nombre_colonia
 *
 * @property Direccion[] $direccions
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Colonium extends Model
{
  public $timestamps = false;
    static $rules = [
		'Nombre_colonia' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre_colonia'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function direccions()
    {
        return $this->hasMany('App\Models\Direccion', 'Colonia_idColonia', 'id');
    }
    

}
