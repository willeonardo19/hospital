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
    	'nombre',
    	'apellido',
    	'telefono',
    	'fech_na',
    	'sexo',
    	'est_civ',
        'ocupacion',
    	'direccion'
    ];
public function scopeSearch($query,$buscar)
    {
        return $query->where('apellido','LIKE',"%$buscar%");
    }



}
