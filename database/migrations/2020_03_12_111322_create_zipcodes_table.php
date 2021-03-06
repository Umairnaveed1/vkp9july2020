<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZipcodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('zipcodes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('zipcode');
            $table->unsignedBigInteger('city_id')->nullable();
            $table
            ->foreign('city_id')
            ->references('id')
            ->on('countries');
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
        Schema::dropIfExists('zipcodes');
    }
}
