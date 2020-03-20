<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        ini_set('memory_limit', -1);
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('UserName');
            $table->string('email')->unique();
            $table->integer('PageSecurity');
            $table->boolean('AdminUser');
            $table->integer('Approvebill');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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

        Schema::dropIfExists('users');


    }
}
