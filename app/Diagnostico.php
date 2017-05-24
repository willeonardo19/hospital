<?php

namespace hospital;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Diagnostico extends Model
{
    use SoftDeletes;
    
	protected $table ="diagnostico_medico";
    protected $fillable =[
    	'paciente_id',
    	'usuario_id',
  		'motivo_cons',
  		'hist_enfermedad',
  		'imp_clinica',
  		'tratamiento'
    ];

 public function consulta()
    {
        return $this->hasMany('hospital\Consulta');
    }
public function users()
    {
        return $this->belongsTo('hospital\User','usuario_id');
    }

}
