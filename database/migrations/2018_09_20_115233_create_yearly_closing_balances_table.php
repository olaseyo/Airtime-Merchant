<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYearlyClosingBalancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::connection('mysql_sendbucs')->create('yearly_closing_balances', function (Blueprint $table) {
            $table->increments('sn');
            $table->bigInteger('account_id')->foreign();
            $table->double('balance');
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
         Schema::connection('mysql_sendbucs')->dropIfExists('yearly_closing_balances');
    }
}
