<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
	protected $fillable = ['street','number','neighborhood','zipcode','city','state','complement'];
	protected $guarded = ['id', 'created_at', 'update_at'];
	protected $table = 'address';

	public function user()
    {
        return $this->belongsTo('App\User');
    }
}
