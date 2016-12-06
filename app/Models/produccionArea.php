<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class produccionArea
 * @package App\Models
 * @version December 6, 2016, 2:37 pm UTC
 */
class produccionArea extends Model
{
    use SoftDeletes;

    public $table = 'produccion_areas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'codigo',
        'nombre',
        'imagen',
        'empleado_id',
        'estacion_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'codigo' => 'string',
        'nombre' => 'string',
        'imagen' => 'string',
        'empleado_id' => 'integer',
        'estacion_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'codigo' => 'required',
        'nombre' => 'required',
        'imagen' => 'required',
        'empleado_id' => 'required',
        'estacion_id' => 'required'
    ];

    
}
