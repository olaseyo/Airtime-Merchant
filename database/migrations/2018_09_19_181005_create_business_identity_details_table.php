<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessIdentityDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::connection('mysql2')->create('business_identity_details', function (Blueprint $table) {
            $table->bigIncrements('business_id');
            $table->bigInteger('idnumber')->foreign();
            $table->string('business_name');
            $table->string('business_address');
            $table->string('business_description')->nullable($value = true);
            $table->string('website')->nullable($value = true);
            $table->string('legal_document_link')->nullable($value = true);
            $table->string('legalid_number')->nullable($value = true);
            $table->string('business_email')->nullable($value = true);
            $table->string('country')->nullable($value = true);
            $table->string('state')->nullable($value = true);
            $table->string('office_phone_one')->nullable($value = true);
            $table->string('office_phone_two')->nullable($value = true);
            $table->string('continent')->nullable($value = true);
            $table->string('registration_date')->nullable($value = true);
            $table->string('business_logo_link')->nullable($value = true);
            $table->string('active_status')->nullable($value = true);
            $table->string('deleted_status')->nullable($value = true);
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
         Schema::connection('mysql2')->dropIfExists('business_identity_details');
    }
}
