<?php

namespace hospital;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paciente extends Model
{
    use SoftDeletes;
    
	protected $table ="paciente";
    protected $fillable =[
    	'cod_pac',
        'dpi',
    	'nombre',
    	'apellido',
    	'telefono',
    	'fech_na',
    	'sexo',
    	'est_civ',
        'religion',
        'ocupacion',
    	'direccion',
        'contacemer',
        'contacttel'
    ];
public function scopeSearch($query,$buscar)
    {
        return $query->where('apellido','LIKE',"%$buscar%")->orwhere('nombre','LIKE',"%$buscar%")->orwhere('telefono','LIKE',"%$buscar%")->orwhere('cod_pac','LIKE',"%$buscar%");
    }

public function consulta()
    {
        return $this->hasOne('hospital\Consulta');
    }
public function laboratorio()
    {
        return $this->hasMany('hospital\Laboratorio');
    }

}
