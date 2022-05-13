<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Direccion
 *
 * @property $id
 * @property $calle
 * @property $numero
 * @property $codigo_postal
 * @property $Colonia_idColonia
 * @property $Ciudad_idCiudad
 *
 * @property Ciudad $ciudad
 * @property Colonium $colonium
 * @property Usuario[] $usuarios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Direccion extends Model
{
    
    static $rules = [
		'codigo_postal' => 'required',
		'Colonia_idColonia' => 'required',
		'Ciudad_idCiudad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo_postal','Colonia_idColonia','Ciudad_idCiudad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ciudad()
    {
        return $this->hasOne('App\Models\Ciudad', 'id', 'Ciudad_idCiudad');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function colonium()
    {
        return $this->hasOne('App\Models\Colonium', 'id', 'Colonia_idColonia');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usuarios()
    {
        return $this->hasMany('App\Models\Usuario', 'Direccion_idDireccion', 'id');
    }
    

}
