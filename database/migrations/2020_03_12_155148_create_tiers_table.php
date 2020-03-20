<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('tiers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tiertype');
            $table->integer('tierstart');
            $table->integer('tierend');
            $table->float('tierpercent');
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
        Schema::dropIfExists('tiers');
    }
}
