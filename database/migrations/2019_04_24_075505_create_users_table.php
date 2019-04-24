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
            $table->string('lastName');
            $table->string('phone');
            $table->date('birthdate')->nullable();
            $table->string('address')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('nameUser');
            $table->string('password');
            $table->integer('qualification')->nullable();

            $table->unsignedInteger('type_user_id');
            $table->unsignedInteger('department_id')->nullable();
            $table->unsignedInteger('city_id')->nullable();
            $table->unsignedInteger('barbershop_id')->nullable();
            $table->unsignedInteger('headquarter_id')->nullable();

            $table->float('longitude')->nullable();
            $table->float('latitude')->nullable();
            $table->rememberToken();
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

            $table->foreign('barbershop_id')
            ->references('id')
            ->on('barbershops');

            $table->foreign('headquarter_id')
            ->references('id')
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
        Schema::dropIfExists('users');
    }
}
