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
        Schema::create('jce_partsentry', function (Blueprint $table) {
            $table->id();
            $table->integer('parts_id')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('disc_percent')->nullable();
            $table->string('disc_amt')->nullable();
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
        Schema::dropIfExists('jce_partsentry');
    }
};
