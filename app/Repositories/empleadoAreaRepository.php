<?php

namespace App\Repositories;

use App\Models\empleadoArea;
use InfyOm\Generator\Common\BaseRepository;

class empleadoAreaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'empleado_id',
        'produccion_area_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return empleadoArea::class;
    }
}
