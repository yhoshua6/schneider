<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class productos
 * @package App\Models
 * @version October 24, 2016, 6:54 pm UTC
 */
class productos extends Model
{
    use SoftDeletes;

    public $table = 'productos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'codigo',
        'imagen',
        'nombre',
        'talla',
        'color',
        'cantidad',
        'unidad',
        'presentacion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'codigo' => 'string',
        'imagen' => 'string',
        'nombre' => 'string',
        'talla' => 'string',
        'color' => 'string',
        'cantidad' => 'integer',
        'unidad' => 'string',
        'presentacion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'codigo' => 'required',
        'imagen' => 'required',
        'nombre' => 'required',
        'talla' => 'required',
        'color' => 'required',
        'cantidad' => 'required',
        'unidad' => 'required',
        'presentacion' => 'required'
    ];

    
}
