<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 255);

            $table->unsignedInteger('barber_id');
            $table->unsignedInteger('turn_id');

            $table->string('color', 255);
            $table->string('textColor', 255);

            $table->dateTime('end')->nullable();

            $table->timestamps();

            $table->foreign('barber_id')
            ->references('id')
            ->on('users');

            $table->foreign('turn_id')
            ->references('id')
            ->on('turns');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
