<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment', function (Blueprint $table) {
            $table->id();
            $table->string('serialnumber')->unique();
            $table->string('vehiclemodel')->nullable();
            $table->string('engineno')->nullable();
            $table->string('brand')->nullable();
            $table->string('description')->nullable();
            $table->string('branch')->nullable();
            $table->date('warrantystart')->nullable();
            $table->date('warrantyend')->nullable();
            $table->string('endcustomer')->nullable();
            $table->string('registrationnumber')->nullable();
            $table->string('endcustomername')->nullable();
            $table->string('endcustomeraddress')->nullable();
            $table->string('endcustomercity')->nullable();
            $table->string('endcustomerstate')->nullable();
            $table->string('endcustomercountry')->nullable();
            $table->string('navcustomercode')->nullable();
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
        Schema::dropIfExists('equipment');
    }
};
