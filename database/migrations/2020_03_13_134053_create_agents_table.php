<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('agents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('agentfirstname');
            $table->string('agentlastname');
            $table->string('agentdisplayname');
            $table->integer('agentcellphone');
            $table->string('agenthome');
            $table->string('agentAltNo');
            $table->string('agentofficeno');
            $table->dateTime('agenthiredate');
            $table->boolean('agentover');
            $table->boolean('agentadve');
            $table->string('agentsocial');
            $table->dateTime('AgentDate');
            $table->string('agentemail');
            $table->string('agentaddress');
            $table->unsignedBigInteger('zipcode_id')->nullable();
            $table
                ->foreign('zipcode_id')
                ->references('id')
                ->on('zipcodes');
            $table->dateTime('agentsever');
            $table->boolean('agentInAct');
            $table->unsignedbigInteger('user_id')->nullable();
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
        Schema::dropIfExists('agents');
    }
}
