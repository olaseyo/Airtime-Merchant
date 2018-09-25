<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

          Schema::connection('mysql_sendbucs')->create('transactions', function (Blueprint $table) {
            $table->increments('tsn_id');
            $table->string('from_account');
            $table->string('to_account');
            $table->string('amount');
            $table->string('from_medium')->nullable();
            $table->string('to_medium')->nullable();
            $table->string('from_location')->nullable();
            $table->string('to_location')->nullable();
            $table->string('description')->nullable();
            $table->boolean('active_status')->default(1);
            $table->boolean('deleted_status')->default(0);
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
          Schema::connection('mysql_sendbucs')->dropIfExists('transactions');
    }
}
