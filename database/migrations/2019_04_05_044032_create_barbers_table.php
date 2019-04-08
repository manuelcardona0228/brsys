<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barbers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30);
            $table->string('lastName', 30);
            $table->string('phone', 13);
            $table->date('fechaNac');
            $table->string('address', 64);
            $table->string('email', 64);
            $table->string('nameUser', 20);
            $table->string('password', 20);
            $table->integer('qualification');

            $table->unsignedInteger('type_user_id');
            $table->unsignedInteger('headquarter_id');

            $table->timestamps();

            $table->foreign('type_user_id')
            ->refences('id')
            ->on('type_users');

            $table->foreign('headquarter_id')
            ->refences('id')
            ->on('headquarters');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barbers');
    }
}
