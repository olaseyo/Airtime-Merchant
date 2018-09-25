<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserIdentityDbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql')->create('user_identity_dbs', function (Blueprint $table) {
             $table->bigIncrements('idnumber');
			 $table->string('firstname')->nullable($value = true);
			 $table->string('lastname')->nullable($value = true);
			 $table->string('othername')->nullable($value = true);
			 $table->string('email')->unique();
			 $table->integer('deleted_status')->default(0);
			 $table->integer('active_status')->default(1);
			 //$table->dateTime('registration_date');
			 $table->string('gender')->nullable($value = true);
			 $table->string('marital_status')->nullable($value = true);
			 $table->string('citizenship')->nullable($value = true);
			 $table->string('occupation')->nullable($value = true);
			 $table->string('continent')->nullable($value = true);
			 $table->string('phone_one')->unique();
			 $table->string('phone_two')->nullable($value = true);
			 $table->string('relations_identity_concatenated')->nullable($value = true);
			 $table->string('photo')->nullable($value = true);
			 $table->date('date_of_birth')->nullable($value = true);
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
       Schema::connection('mysql')->dropIfExists('user_identity_dbs');
    }
}
