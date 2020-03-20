<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('propertiesnotes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('propertyID');
            $table->dateTime('propertyno');
            $table->integer('propertyDo');
            $table->unsignedBigInteger('user_id')->nullable();
            $table
                ->foreign('user_id')
                ->references('id')
                ->on('users');
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
        Schema::dropIfExists('propertiesnotes');
    }
}
