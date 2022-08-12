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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('customercode')->unique();
            $table->string('customername')->unique();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('tin')->nullable();
            $table->string('phone')->nullable();
            $table->string('contact')->nullable();
            $table->string('email')->nullable();
            $table->string('channelgroup')->nullable();
            $table->string('paymenttermscode')->nullable();
            $table->string('units')->nullable();
            $table->integer('creditlimit')->nullable();
            $table->string('brand')->nullable();
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
        Schema::dropIfExists('customers');
    }
};
