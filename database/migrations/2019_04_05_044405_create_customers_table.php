<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('document', 10);
            $table->string('name', 30);
            $table->string('lastName', 30);
            $table->string('phone', 13);
            $table->date('fechaNac');
            $table->string('address', 64);
            $table->string('email', 64);
            $table->string('nameUser', 20);
            $table->string('password', 20);

            $table->unsignedInteger('type_user_id');
            $table->unsignedInteger('department_id');
            $table->unsignedInteger('city_id');

            $table->float('longitude');
            $table->float('latitude');

            $table->timestamps();

            $table->foreign('type_user_id')
            ->references('id')
            ->on('type_users');

            $table->foreign('department_id')
            ->references('id')
            ->on('departments');

            $table->foreign('city_id')
            ->references('id')
            ->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
