<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTurnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turns', function (Blueprint $table) {
            $table->increments('id');
            $table->date('day');
            $table->time('hour');

            $table->unsignedInteger('barber_id');
            $table->unsignedInteger('service_id');
            $table->unsignedInteger('customer_id');

            $table->boolean('state');
            $table->timestamps();

            $table->foreign('barber_id')
            ->references('id')
            ->on('users');

            $table->foreign('service_id')
            ->references('id')
            ->on('services');

            $table->foreign('customer_id')
            ->references('id')
            ->on('users');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turns');
    }
}
