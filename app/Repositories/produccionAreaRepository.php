<?php

namespace App\Repositories;

use App\Models\produccionArea;
use InfyOm\Generator\Common\BaseRepository;

class produccionAreaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'codigo',
        'nombre',
        'empleado_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return produccionArea::class;
    }
}
