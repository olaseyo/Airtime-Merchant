<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchantinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchantinfo', function (Blueprint $table) {
            $table->bigIncrements('merchantid');
            $table->bigInteger('userid');
            $table->bigInteger('businessid');
            $table->string('required_channels_concat');
            $table->string('service_display_title');
            $table->string('service_display_action');
            $table->string('service_display_logo');
            $table->string('furtherinfowebsite');
            $table->string('sendbucsaccountIDtoreceivethemoney');
            $table->string('paymentnotificationwebhookurl');
            $table->integer('emailnotification');
            $table->integer('csvuploadandownload');
            $table->dateTime('dateregistered');
            $table->integer('active_status');
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
        Schema::dropIfExists('merchantinfo');
    }
}
