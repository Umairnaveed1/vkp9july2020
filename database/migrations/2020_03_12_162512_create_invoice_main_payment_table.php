<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceMainPaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoicemainpayment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('paymentdate');
            $table->string('reference');
            $table->integer('paymenttype');
            $table->float('paymenta');
            $table->string('rcvdform');
            $table->float('appliedamo');
            $table->boolean('checkcreated');
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
        Schema::dropIfExists('invoicemainpayment');
    }
}
