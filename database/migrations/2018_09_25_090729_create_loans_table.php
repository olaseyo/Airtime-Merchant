<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::connection('mysql_sendbucs')->create('loans', function (Blueprint $table) {
            $table->increments('load_id');
            $table->integer('account_id');
            $table->double('loan_amount');
            $table->string('purpose');
            $table->string('monthly_income');
            $table->date('payback_duration');
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
         Schema::connection('mysql_sendbucs')->dropIfExists('loans');
    }
}
