<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class empleadoArea
 * @package App\Models
 * @version October 30, 2016, 4:03 am UTC
 */
class empleadoArea extends Model
{
    use SoftDeletes;

    public $table = 'empleado_areas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'empleado_id',
        'produccion_area_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'empleado_id' => 'integer',
        'produccion_area_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'empleado_id' => 'required',
        'produccion_area_id' => 'required'
    ];

    
}
