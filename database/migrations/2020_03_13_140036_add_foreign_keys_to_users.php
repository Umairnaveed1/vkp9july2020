<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('office_id')->nullable()->after('email');
            $table
                ->foreign('office_id')
                ->references('id')
                ->on('offices');

            $table->unsignedBigInteger('agent_id')->nullable()->after('Approvebill');
            $table
                ->foreign('agent_id')
                ->references('id')
                ->on('agents');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
