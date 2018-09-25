<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisplaycaptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('displaycaption', function (Blueprint $table) {
            $table->bigIncrements('captionid');
            $table->bigInteger('merchantid');
            $table->string('captionname');
            $table->string('price');
            $table->string('receiving_account');
            $table->string('other_info_input');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('displaycaption');
    }
}
