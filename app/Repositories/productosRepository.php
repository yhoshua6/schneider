<?php

namespace App\Repositories;

use App\Models\productos;
use InfyOm\Generator\Common\BaseRepository;

class productosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'codigo',
        'imagen',
        'nombre',
        'talla',
        'color',
        'cantidad',
        'unidad',
        'presentacion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return productos::class;
    }
}
