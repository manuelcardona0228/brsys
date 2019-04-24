<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeadquartersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('headquarters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nit', 40);
            $table->string('businessName', 40);
            $table->string('address', 64);
            $table->string('email', 64);
            $table->string('phone', 13);
            
            $table->unsignedInteger('barbershop_id');
            $table->unsignedInteger('department_id');
            $table->unsignedInteger('city_id');

            $table->float('longitude');
            $table->float('latitude');

            $table->timestamps();

            $table->foreign('barbershop_id')
            ->references('id')
            ->on('barbershops');

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
        Schema::dropIfExists('headquarters');
    }
}
