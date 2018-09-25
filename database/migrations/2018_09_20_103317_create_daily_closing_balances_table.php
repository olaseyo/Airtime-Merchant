<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDailyClosingBalancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_sendbucs')->create('daily_closing_balances', function (Blueprint $table) {
            $table->increments('closing_balance_id');
            $table->bigInteger('account_id')->foreign();
            $table->string('balance');
            $table->dateTime('datetime')->nullable($value=true);
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
        Schema::connection('mysql_sendbucs')->dropIfExists('daily_closing_balances');
    }
}
