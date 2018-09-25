<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		
        Schema::connection('mysql_sendbucs')->create('employees', function (Blueprint $table) {
            $table->increments('employee_id');
            $table->bigInteger('account_id')->foreign();
            $table->bigInteger('merchant_id');
            $table->string('email');
            $table->string('phone');
            $table->string('password');
            $table->dateTime('dateCreated');
            $table->string('role');
            $table->integer('pix_src');
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
        Schema::connection('mysql_sendbucs')->dropIfExists('employees');
    }
}
