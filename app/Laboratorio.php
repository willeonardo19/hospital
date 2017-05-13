<?php

namespace hospital;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Laboratorio extends Model
{
    use SoftDeletes;
    
	protected $table ="laboratorio";
    protected $fillable =[
    	'examen_id',
    	'paciente_id',
    	'resultado'
    ];


    public function paciente()
    {
        return $this->belongsTo('hospital\Paciente');
    }

    public function examen()
    {
        return $this->belongsTo('hospital\Examen');
    }
}
