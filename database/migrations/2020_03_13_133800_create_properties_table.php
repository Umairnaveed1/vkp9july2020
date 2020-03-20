<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('propertyName');
            $table->string('propertyAd');
            $table->integer('propertyZiPID');
            $table->boolean('propertyMarchant');
            $table->boolean('propertyRetailer');
            $table->integer('propertyphone');
            $table->integer('propertyFax');
            $table->string('propertyAltNo');
            $table->string('propertyEmail');
            $table->integer('MgmtCompID');
            $table->string('MgmtCompName');
            $table->string('MgmtCompAddress');
            $table->integer('ZipID');
            $table->boolean('MgmtMainBill');
            $table->integer('Mgmtphonenumber');
            $table->string('Mgmtfaxnumber');
            $table->string('MgmtAltNo');
            $table->string('MgmtEmail');
            $table->dateTime('lastcontract');
            $table->boolean('PropertyAu');
            $table->boolean('PropertySb');
            $table->boolean('PropertyNo');
            $table->boolean('PropertDo');
            $table->boolean('PropertyIn');
            $table->boolean('SuperAuto');
            $table->string('SAPID');
            $table->float('SAPPer', 8, 2);
            $table->float('SAPRate', 8, 2);
            $table->integer('SAPCompType');
            $table->float('SAPCompRate');
            $table->unsignedBigInteger('zipcode_id')->nullable();
            $table
                ->foreign('zipcode_id')
                ->references('id')
                ->on('zipcodes');
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
        Schema::dropIfExists('properties');
    }
}
