<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class materialEntrega
 * @package App\Models
 * @version November 17, 2016, 10:45 pm UTC
 */
class materialEntrega extends Model
{
    use SoftDeletes;

    public $table = 'material_entregas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'producto_id',
        'empleado_id',
        'guid',
        'barcode',
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
        'guid' => 'string',
        'barcode' => 'string',
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
        'guid' => 'required',
        'barcode' => 'required',
        'cantidad' => 'required',
        'fechaEntrega' => 'required'
    ];

    
}
