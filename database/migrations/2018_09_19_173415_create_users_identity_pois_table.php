<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersIdentityPoisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::connection('mysql')->create('users_identity_pois', function (Blueprint $table) {
            $table->bigIncrements('users_identity_pois_id');
            $table->bigInteger('idnumber')->foreign;
			 $table->string('passport_number')->nullable($value = true);
			 $table->string('passport_expiry_date')->nullable($value = true);
			 $table->string('voters_id_number')->nullable($value = true);
			 $table->string('drivers_license_number')->nullable($value = true);
			 $table->string('other_govt_id')->nullable($value = true);
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
        Schema::connection('mysql')->dropIfExists('users_identity_pois');
    }
}
