<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeveloperinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('developerinfo', function (Blueprint $table) {
            $table->bigIncrements('developerinfoid');
            $table->bigInteger('userid');
            $table->string('purpose');
            $table->string('password');
            $table->string('token');
            $table->dateTime('token_generated_date');
            $table->integer('internalorexternal');
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
        Schema::dropIfExists('developerinfo');
    }
}
