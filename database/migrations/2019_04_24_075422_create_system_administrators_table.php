<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemAdministratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_administrators', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30);
            $table->string('lastName', 30);
            $table->string('email', 64);
            $table->string('phone', 13);
            $table->string('nameUser', 20);
            $table->string('password', 20);
            $table->date('birthdate');

            $table->unsignedInteger('type_user_id');
            
            $table->timestamps();

            $table->foreign('type_user_id')
            ->references('id')
            ->on('type_users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('system_administrators');
    }
}
