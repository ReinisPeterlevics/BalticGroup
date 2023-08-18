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
            $table->string('description');
            $table->string('country_id');
            $table->string('season_id');
            $table->string('hotel');
            $table->string('image');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('duration');
            $table->integer('price');
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
