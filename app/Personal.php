<?php

namespace hospital;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Personal extends Model
{
    use SoftDeletes;
    
	protected $table ="personal";
    protected $fillable =[
    	'nombre',
    	'apellido',
    	'telefono',
    	'direccion',
        'fechna',
    	'dpi',
        'contacemer',
        'contacttel'
    ];



public function scopeSearch($query,$buscar)
    {
        return $query->where('apellido','LIKE',"%$buscar%");
    }

 public function users()
    {
        return $this->hasMany('hospital\Users');
    }


}


