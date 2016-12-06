<?php

namespace App\Repositories;

use App\Models\estacion;
use InfyOm\Generator\Common\BaseRepository;

class estacionRepository extends BaseRepository
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
        return estacion::class;
    }
}
