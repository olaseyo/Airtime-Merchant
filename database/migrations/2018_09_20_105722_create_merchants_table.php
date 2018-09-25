<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_sendbucs')->create('merchants', function (Blueprint $table) {
            $table->increments('merchant_id');
            $table->integer('account_id')->foreign();
            $table->string('business_idnumber');
            $table->string('business_category');
            $table->string('product_category');
            $table->dateTime('datecreated');
            $table->integer('active_status');
            $table->integer('deleted_status');
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
        Schema::connection('mysql_sendbucs')->dropIfExists('merchants');
    }
}
