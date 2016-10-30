<?php

namespace App\Repositories;

use App\Models\tipoEmpleado;
use InfyOm\Generator\Common\BaseRepository;

class tipoEmpleadoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return tipoEmpleado::class;
    }
}
