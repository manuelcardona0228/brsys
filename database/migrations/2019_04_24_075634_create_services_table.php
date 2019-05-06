<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->text('description');
            $table->float('value');
            $table->string('name', 40)->nullable();
            $table->string('img', 255)->nullable();

            $table->unsignedInteger('barbershop_id');

            $table->timestamps();

            $table->foreign('barbershop_id')
            ->references('id')
            ->on('barbershops');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
