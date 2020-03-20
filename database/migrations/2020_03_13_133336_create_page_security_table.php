<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageSecurityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('pagesecurity', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('pageid');
            $table->string('pagename');
            $table->boolean('viewsocialsec');
            $table->boolean('editoverr');
            $table->boolean('editagenta');
            $table->boolean('chengeagea');
            $table->boolean('setagent');
            $table->boolean('deleteedit');
            $table->boolean('viewagent');
            $table->boolean('editagentc');
            $table->boolean('viewETCPaid');
            $table->boolean('chargeback');
            $table->boolean('printtransaction');
            $table->boolean('addagente');
            $table->boolean('deleteagent');
            $table->boolean('editexpense');
            $table->boolean('printexpense');
            $table->boolean('addagentb');
            $table->boolean('deleteagentb');
            $table->boolean('editbonush');
            $table->boolean('printbonush');
            $table->boolean('severagenta');
            $table->boolean('recalculate');
            $table->boolean('aaa');
            $table->boolean('editbonushh');
            $table->boolean('printbonushh');
            $table->boolean('severagent');
            $table->boolean('recalculatea');
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
        Schema::dropIfExists('pagesecurity');
    }
}
