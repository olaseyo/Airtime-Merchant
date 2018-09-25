<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersIdentityPoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::connection('mysql')->create('users_identity_poas', function (Blueprint $table) {
           $table->bigIncrements('user_identity_poas_id');
			 $table->bigInteger('idnumber')->foreign();
			 $table->string('addressline_one')->nullable($value = true);
			 $table->string('addressline_one_type')->nullable($value = true);
			 $table->string('addressline_two')->nullable($value = true);
			 $table->string('addressline_two_type')->nullable($value = true);
			 $table->string('city')->nullable($value = true);
			 $table->string('zipcode')->nullable($value = true);
			 $table->string('state')->nullable($value = true);
			 $table->string('country')->nullable($value = true);
			 $table->string('country_code')->nullable($value = true);
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql')->dropIfExists('users_identity_poas');
    }
}
