<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceProvider extends Model
{
    protected $fillable = ['name','email','cpf','sexy','profissao','telephone1','telephone2','landline'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'service_provider';
}
