<?php

namespace App\Repositories;

use App\Models\empleado;
use InfyOm\Generator\Common\BaseRepository;

class empleadoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return empleado::class;
    }
}
