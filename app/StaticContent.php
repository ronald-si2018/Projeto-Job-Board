<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StaticContent extends Model
{
    //
	protected $fillable = [
        'title', 'content'
    ];

	protected $primaryKey = 'id';
    protected $table = "static_contents";
}
