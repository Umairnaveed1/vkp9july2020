<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('offices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('office_description');
            $table->string('office_address');
            $table->integer('office_phone');
            $table->string('office_fax');
            $table->string('office_email');
            $table->string('manager');
            $table->string('co_manager');
            $table->unsignedBigInteger('agent_id')->nullable();
            $table
                ->foreign('agent_id')
                ->references('id')
                ->on('agents');
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
        Schema::dropIfExists('offices');
    }
}
