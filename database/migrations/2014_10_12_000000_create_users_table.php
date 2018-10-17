    <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('sexy');
            $table->string('cpf_cnpj')->unique();
            $table->integer('tipo_id');
            $table->date('date_birth');
            $table->string('phone1');
            $table->rememberToken();
            $table->timestamps();
        });
    }

 
//$table->integer('address_id');
//$table->foreign('address_id')->references('id')->on('address');
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
