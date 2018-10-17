<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Address extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('address', function (Blueprint $table) {
        $table->increments('id');
        $table->string('street', 40);
        $table->integer('number');
        $table->string('neighborhood', 40);
        $table->string('complement', 40);
        $table->string('zipcode', 10);
        $table->string('city', 40);
        $table->string('state', 2);
        $table->string('cpf_service_provider')->nullable();
        $table->foreign('cpf_service_provider')->references('cpf')->on('service_provider');
        $table->string('cpf_cnpj_user')->nullable();
        $table->foreign('cpf_cnpj_user')->references('cpf_cnpj')->on('users');
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
        Schema::dropIfExists('address');
    }
}
