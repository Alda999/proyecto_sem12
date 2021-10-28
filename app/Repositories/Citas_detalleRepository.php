<?php

namespace App\Repositories;

use App\Models\Citas_detalle;
use App\Repositories\BaseRepository;

/**
 * Class Citas_detalleRepository
 * @package App\Repositories
 * @version October 28, 2021, 1:41 am UTC
*/

class Citas_detalleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_cita'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Citas_detalle::class;
    }
}
