<?php

namespace hospital;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Preconsulta extends Model
{
    use SoftDeletes;
    
	protected $table ="preconsulta";
    protected $fillable =[
    	'paciente_id',
    	'usuario_id',
      'est_conciencia',
      'ant_medicos',
      'ant_quirurgicos',
      'ant_alergicos',
      'ant_traumaticos',
      'ant_familiares',
  		'temp_oral',
  		'pr_arterial',
  		'fr_cardiaca',
  		'fr_respiratoria',
  		'peso',
  		'talla',
  		'au',
  		'fcf'
    ];
}
