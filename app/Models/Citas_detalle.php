<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Citas_detalle
 * @package App\Models
 * @version October 28, 2021, 1:41 am UTC
 *
 * @property integer $id_cita
 */
class Citas_detalle extends Model
{
    use SoftDeletes;

    public $table = 'citas_detalle';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_cita'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idcitas_detalle' => 'integer',
        'id_cita' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_cita' => 'nullable|integer'
    ];

    
}
