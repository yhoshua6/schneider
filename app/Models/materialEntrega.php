<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class materialEntrega
 * @package App\Models
 * @version October 30, 2016, 4:06 am UTC
 */
class materialEntrega extends Model
{
    use SoftDeletes;

    public $table = 'material_entregas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'producto_id',
        'empleado_id',
        'cantidad',
        'fechaEntrega'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'producto_id' => 'integer',
        'empleado_id' => 'integer',
        'cantidad' => 'integer',
        'fechaEntrega' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'producto_id' => 'required',
        'empleado_id' => 'required',
        'cantidad' => 'required',
        'fechaEntrega' => 'required'
    ];

    
}
