<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profissao extends Model
{
    //
	protected $fillable = ['nome_profissao'];
	protected $guarded = ['id'];
	protected $table = 'profissao';
}
