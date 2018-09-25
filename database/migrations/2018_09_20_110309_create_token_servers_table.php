<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTokenServersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::connection('mysql_sendbucs')->create('token_servers', function (Blueprint $table) {
            $table->increments('token_id');
            $table->integer('account_id')->foreign();
            $table->string('token');
            $table->integer('duration');
            $table->double('amount');
            $table->string('rc_or_mk');
            $table->dateTime('date_created');
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
         Schema::connection('mysql_sendbucs')->dropIfExists('token_servers');
    }
}
