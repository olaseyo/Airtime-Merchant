<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonthlyClosingBalancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_sendbucs')->create('monthly_closing_balances', function (Blueprint $table) {
            $table->increments('montly_closing_balance_id');
            $table->integer('account_id')->foreign();
            $table->string('balance');
            $table->dateTime('datetime');
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
        Schema::connection('mysql_sendbucs')->dropIfExists('monthly_closing_balances');
    }
}
