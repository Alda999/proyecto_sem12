<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Doctor
 * @package App\Models
 * @version October 28, 2021, 1:42 am UTC
 *
 * @property string $ape_nom
 * @property integer $dni
 * @property string $especialidad
 */
class Doctor extends Model
{
    use SoftDeletes;

    public $table = 'doctor';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'ape_nom',
        'dni',
        'especialidad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'iddoctor' => 'integer',
        'ape_nom' => 'string',
        'dni' => 'integer',
        'especialidad' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ape_nom' => 'nullable|string|max:45',
        'dni' => 'nullable|integer',
        'especialidad' => 'nullable|string|max:45'
    ];

    
}
