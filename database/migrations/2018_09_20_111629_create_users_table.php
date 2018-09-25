<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::connection('mysql_sendbucs')->create('users', function (Blueprint $table) {
            $table->increments('account_id');
            $table->integer('idnumber');
            $table->double('account_balance')->default(0);
            $table->string('device_info');
            $table->string('password');
            $table->integer('pin');
            $table->string('pix_src')->nullable();
            $table->integer('merchantOrmserOrAdmin')->default(0);
            $table->integer('reg_status')->default(1);
            $table->integer('active_status')->default(1);
            $table->integer('deleted_status')->default(0);
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
         Schema::connection('mysql_sendbucs')->dropIfExists('users');
    }
}
