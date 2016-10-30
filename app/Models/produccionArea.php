<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class produccionArea
 * @package App\Models
 * @version October 30, 2016, 4:01 am UTC
 */
class produccionArea extends Model
{
    use SoftDeletes;

    public $table = 'produccion_areas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'codigo',
        'nombre',
        'empleado_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'codigo' => 'string',
        'nombre' => 'string',
        'empleado_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'codigo' => 'required',
        'nombre' => 'required',
        'empleado_id' => 'required'
    ];

    
}
