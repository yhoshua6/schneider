<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class empleado
 * @package App\Models
 * @version October 30, 2016, 3:55 am UTC
 */
class empleado extends Model
{
    use SoftDeletes;

    public $table = 'empleados';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'tipo_empleado_id',
        'turno',
        'guid',
        'nombre',
        'genero',
        'antiguedad',
        'bataEntrega',
        'bataTalla',
        'camisaEntrega',
        'camisaTalla',
        'pantalonEntrega',
        'pantalonTalla'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'tipo_empleado_id' => 'integer',
        'turno' => 'integer',
        'guid' => 'string',
        'nombre' => 'string',
        'genero' => 'integer',
        'antiguedad' => 'integer',
        'bataEntrega' => 'integer',
        'bataTalla' => 'integer',
        'camisaEntrega' => 'integer',
        'camisaTalla' => 'integer',
        'pantalonEntrega' => 'integer',
        'pantalonTalla' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tipo_empleado_id' => 'required',
        'turno' => 'required',
        'guid' => 'required',
        'nombre' => 'required',
        'genero' => 'required',
        'antiguedad' => 'required',
        'bataEntrega' => 'required',
        'bataTalla' => 'required',
        'camisaEntrega' => 'required',
        'camisaTalla' => 'required',
        'pantalonEntrega' => 'required',
        'pantalonTalla' => 'required'
    ];

    
}
