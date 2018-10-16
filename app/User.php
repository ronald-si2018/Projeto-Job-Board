<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','date_birth','cpf_cnpj','sexy','phone1'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','tipo_id'
    ];

    protected $primaryKey = 'id';
    protected $table = "users";

    public function adress()
    {
        return $this->hasOne('App\Adress');
    }
}
