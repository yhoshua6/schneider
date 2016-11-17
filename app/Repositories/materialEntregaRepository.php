<?php

namespace App\Repositories;

use App\Models\materialEntrega;
use InfyOm\Generator\Common\BaseRepository;

class materialEntregaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'producto_id',
        'empleado_id',
        'guid',
        'barcode',
        'cantidad',
        'fechaEntrega'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return materialEntrega::class;
    }
}
