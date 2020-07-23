<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PercentagesplitToHsbillings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hsbillings', function (Blueprint $table) {
			$table->string("percentagesplit")->after('secondage');
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hsbillings', function (Blueprint $table) {
			$table->string("percentagesplit");
            //
        });
    }
}
