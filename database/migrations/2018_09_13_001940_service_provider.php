<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ServiceProvider extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('service_provider', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 150);
            $table->string('email', 120)->unique();
            $table->string('password');
            $table->string('cpf', 11)->unique();
            $table->string('sexy');
            $table->date('data_nascimento');
            $table->string('profissao');
            $table->string('telephone1', 11);
            $table->string('telephone2', 11);
            $table->string('landline', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_provider');
    }
}
