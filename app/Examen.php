<?php

namespace hospital;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Examen extends Model
{
    use SoftDeletes;
    
	protected $table ="examen";
    protected $fillable =[
    	'examen'
    ];
    public function laboratorio()
    {
        return $this->hasMany('hospital\Laboratorio');
    }
}
