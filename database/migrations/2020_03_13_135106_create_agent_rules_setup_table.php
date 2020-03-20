<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgentRulesSetupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agentrulessetup', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('agent_id')->nullable();
            $table
                ->foreign('agent_id')
                ->references('id')
                ->on('agents');
            $table->boolean('officemanager');
            $table->boolean('wpsplitonly');
            $table->boolean('gossfiftyp');
            $table->boolean('splitbwtwo');
            $table->boolean('rule1');
            $table->boolean('rule2');
            $table->boolean('rule3');
            $table->boolean('rule4');
            $table->boolean('rule5');
            $table->boolean('rule6');
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
        Schema::dropIfExists('agentrulessetup');
    }
}
