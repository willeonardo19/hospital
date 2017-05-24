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
    	'preconsulta_id',
        'diagnostico_med_id',
    	'estado'
    	
    ];
public function paciente()
    {
        return $this->belongsTo('hospital\Paciente');
    }
/*public function usuario()
    {
        return $this->belongsTo('hospital\User','usuario_id');
    }
    public function users()
    {
        return $this->hasMany('hospital\User','usuario_id');
    }*/

public function preconsulta()
    {
        return $this->belongsTo('hospital\Preconsulta','preconsulta_id');
    }
public function diagnostico()
    {
        return $this->belongsTo('hospital\Diagnostico','diagnostico_med_id');
    }



}
