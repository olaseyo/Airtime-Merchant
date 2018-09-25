<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymenthistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paymenthistory', function (Blueprint $table) {
            $table->bigIncrements('paymentid');
            $table->dateTime('paymentdatetime');
            $table->string('paymentchannelname');
            $table->string('paymentsenderid');
            $table->string('paymentreceiverid');
            $table->string('captionid');
            $table->integer('deleted_status');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paymenthistory');
    }
}
