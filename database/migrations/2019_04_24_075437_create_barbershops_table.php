<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarbershopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barbershops', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nit', 40);
            $table->string('businessName', 40);
            $table->string('address', 64);
            $table->string('email', 64);
            $table->string('phone', 13);
            $table->string('website', 64);

            $table->unsignedInteger('department_id')->nullable();
            $table->unsignedInteger('city_id')->nullable();

            $table->timestamps();

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
        Schema::dropIfExists('barbershops');
    }
}
