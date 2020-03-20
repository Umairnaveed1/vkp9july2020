<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('propertieslogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('propertyID');
            $table->integer('propertyname');
            $table->integer('propertyaddress1');
            $table->unsignedBigInteger('zipcode_id')->nullable();
            $table
                ->foreign('zipcode_id')
                ->references('id')
                ->on('zipcodes');
            $table->boolean('propertymar');
            $table->boolean('propertyretailer');
            $table->integer('propertyphone');
            $table->string('propertyfax');
            $table->integer('propertyAltNo');
            $table->string('propertyEmail');
            $table->string('mgmtCompId');
            $table->string('mgmtCompName');
            $table->string('mgmtCompAddress1');
            $table->string('mgmtCompAddress2');
            $table->integer('mgmtZipID');
            $table->boolean('mgmtMainB');
            $table->integer('mgmtphoneno');
            $table->string('mgmtfax');
            $table->string('mgmtAltNo');
            $table->string('mgmtemail');
            $table->dateTime('lastcontra');
            $table->boolean('propertyAu');
            $table->boolean('propertySb');
            $table->boolean('propertyNo');
            $table->boolean('propertyIn');
            $table->boolean('SuperAuto');
            $table->integer('SAPID');
            $table->float('SAPer');
            $table->float('SAPRate');
            $table->integer('SAPComType');
            $table->float('SAPComRate');
            $table
                ->unsignedBigInteger('user_id')->nullable();
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
        Schema::dropIfExists('propertieslogs');
    }
}
