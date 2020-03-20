<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicepaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('invoicepayments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('serial_id');
            $table->dateTime('invoicedate');
            $table->float('comdue');
            $table->float('latefees');
            $table->float('AmountPaid');
            $table->unsignedBigInteger('invoice_id')->nullable();
            $table
                ->foreign('invoice_id')
                ->references('id')
                ->on('invoices');
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
        Schema::dropIfExists('invoicepayments');
    }
}
