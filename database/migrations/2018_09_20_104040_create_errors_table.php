<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateErrorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_sendbucs')->create('errors', function (Blueprint $table) {
            $table->increments('error_id');
            $table->string('page')->nullable($value=true);
            $table->string('function')->nullable($value=true);
            $table->string('description')->nullable($value=true);
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
       Schema::connection('mysql_sendbucs')->dropIfExists('errors');
    }
}
