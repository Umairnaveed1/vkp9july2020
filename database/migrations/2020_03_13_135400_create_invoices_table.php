<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('autopay');
            $table->unsignedBigInteger('property_id')->nullable();
            $table
                ->foreign('property_id')
                ->references('id')
                ->on('properties');

            $table->dateTime('lastcontra');
            $table->integer('invoicemgmetno');
            $table->string('invoicemgmtname');
            $table->string('invoicemgmtdesc');
            $table->string('invoicemgmttotal');
            $table->integer('invoicemgmtcell');
            $table->string('invoicemgmtbill');
            $table->integer('invoicemgmtorder');
            $table->integer('invoicemgmtbal');
            $table->integer('tenantname');
            $table->string('tenantaddress');
            $table->integer('tenantunitno');
            $table->integer('tenantzipcode');
            $table->string('invoice_notes');
            $table->dateTime('invoicedate');
            $table->dateTime('leesestart');
            $table->string('leeseterm');
            $table->string('verifier');
            $table->integer('invmakeid');
            $table->float('rent');
            $table->float('bonus');
            $table->float('vkppercent');
            $table->float('flat_rate');
            $table->float('amountdue');
            $table->integer('firstagent D');
            $table->integer('mcnb count');
            $table->float('firstagent C');
            $table->boolean('no number');
            $table->boolean('advance');
            $table->integer('monthly advance');
            $table->float('duetofirst A');
            $table->float('vkpsplit');
            $table->integer('secondage');
            $table->float('duetosecond');
            $table->boolean('fiftyfiftysplit');
            $table->smallInteger('ahs');
            $table->boolean('legal');
            $table->boolean('adjustcom');
            $table->boolean('nopay');
            $table->boolean('active');
            $table->float('APbuyer bo');
            $table->float('APReferal A');
            $table->integer('APRroperty ID');
            $table->string('APAgent Name');
            $table->float('APPayment');
            $table->float('APamount D');
            $table->string('SAPAgentID');
            $table->integer('SAPAgentC');
            $table->float('SAPAgentCo');
            $table->integer('SAPComType');
            $table->float('SAPComRate');
            $table->float('SAPvkpAm');
            $table->float('SAPAgentSplit');
            $table->float('SAPvkSplit');
            $table->boolean('checkcheeta');
            $table->boolean('checkcheetb');
            $table->boolean('checkcheetc');
            $table->boolean('checkcheetd');
            $table->boolean('checkcheete');
            $table->boolean('advancec');
            $table->boolean('EmailSend');
            $table->dateTime('EmailDate');
            $table->boolean('invoiceholda');
            $table->boolean('invoiceholdb');
            $table->string('igiftcard');
            $table->string('pcno');
            $table->boolean('printnote');
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
        Schema::dropIfExists('invoices');
    }
}
