<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class address extends Model
{
	protected $fillable = ['street','number','neighborhood','zipcode','city','state','cpf_service_provider'];
	protected $guarded = ['id', 'created_at', 'update_at'];
	protected $table = 'address';
}
