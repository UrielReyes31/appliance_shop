<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 *
 * @property $id
 * @property $Nombre
 * @property $Paterno
 * @property $Materno
 * @property $edad
 * @property $Telefono
 * @property $Tienda_idTienda
 * @property $Direccion_idDireccion
 * @property $Sexo
 * @property $Correo
 *
 * @property Direccion $direccion
 * @property Tienda $tienda
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuario extends Model
{
    public $timestamps = false;
    
    static $rules = [
		'Nombre' => 'required',
		'Paterno' => 'required',
		'Materno' => 'required',
		'edad' => 'required',
		'Telefono' => 'required',
		'Tienda_idTienda' => 'required',
		'Direccion_idDireccion' => 'required',
		'Sexo' => 'required',
		'Correo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Paterno','Materno','edad','Telefono','Tienda_idTienda','Direccion_idDireccion','Sexo','Correo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function direccion()
    {
        return $this->hasOne('App\Models\Direccion', 'id', 'Direccion_idDireccion');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tienda()
    {
        return $this->hasOne('App\Models\Tienda', 'id', 'Tienda_idTienda');
    }
    

}
