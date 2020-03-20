<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsersIdToPageSecurityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pagesecurity', function (Blueprint $table) {
            $table->string('adduser')->after('recalculatea');
            $table->string('addsecurity')->after('adduser');
            $table->unsignedBigInteger('user_id')->after('addsecurity')
            ->nullable();
            $table
                ->foreign('user_id')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pagesecurity', function (Blueprint $table) {
            //
        });
    }
}
