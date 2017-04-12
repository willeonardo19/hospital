<?php

namespace hospital;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Consulta extends Model
{
    use SoftDeletes;
    
	protected $table ="consulta";
    protected $fillable =[
    	'paciente_id',
    	'user_id',
    	'estado'
    	
    ];
public function paciente()
    {
        return $this->belongsTo('hospital\Paciente');
    }
public function usuario()
    {
        return $this->belongsTo('hospital\User');
    }




}
