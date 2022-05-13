<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $idProducto
 * @property $Precio
 * @property $Nombre_producto
 * @property $Modelo
 * @property $idCategoria_fk
 * @property $idMarca_fk
 *
 * @property Categoria $categoria
 * @property Marca $marca
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'id',
		'Precio' => 'required',
		'Nombre_producto' => 'required',
		'Modelo' => 'required',
        'imagen',
		'idCategoria_fk' => 'required',
		'idMarca_fk' => 'required',
    ];
    public $timestamps = false;


    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Precio','Nombre_producto','Modelo','imagen','idCategoria_fk','idMarca_fk'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'idCategoria_fk');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function marca()
    {
        return $this->hasOne('App\Models\Marca', 'id', 'idMarca_fk');
    }
    

}
