<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoginSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	
        Schema::connection('mysql_sendbucs')->create('login_sessions', function (Blueprint $table) {
            $table->increments('login_session_id');
			$table->integer('account_id')->foreign();
            $table->integer('refreshtoken_id');
            $table->string('refreshtoken_id_hashed');
            $table->string('token');
            $table->integer('duration_secs');
            $table->dateTime('createdTime');
            $table->string('decryptMasterkey');
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
        Schema::connection('mysql_sendbucs')->dropIfExists('login_sessions');
    }
}
