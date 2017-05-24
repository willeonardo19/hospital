<?php

namespace hospital;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;


class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table ="users";
    protected $fillable = [
        'user',
        'email', 
        'password',
        'type',
        'personal_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function scopeSearch($query,$buscar)
    {
        return $query->where('user','LIKE',"%$buscar%");
    }
  
    //Relacion para determinar que personal le corresponde el usuario
    public function personal()
    {
        return $this->belongsTo('hospital\Personal');
    }
    //
    /*public function consulta()
    {
        return $this->hasMany('hospital\Consulta');
    }*/
    public function preconsulta()
    {
        return $this->hasMany('hospital\Preconsulta');
    }

    public function diagnostico()
    {
        return $this->hasMany('hospital\Disgnostico');
    }
  


}
