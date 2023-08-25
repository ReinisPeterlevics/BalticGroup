<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id('location_id');
            $table->string('name');
            $table->text('description');
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')->references('country_id')->on('countries');
            $table->unsignedBigInteger('season_id');
            $table->foreign('season_id')->references('season_id')->on('seasons');
            $table->string('hotel');
            $table->string('image');
            $table->string('small_image');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('duration');
            $table->double('price');
            $table->integer('spots_left');
            $table->date('departure_date');
            $table->date('return_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
}
