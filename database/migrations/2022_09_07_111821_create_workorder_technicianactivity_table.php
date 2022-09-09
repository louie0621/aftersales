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
        Schema::create('workorder_technicianactivity', function (Blueprint $table) {
            $table->id();
            $table->string('activity_date')->nullable();
            $table->string('description_no')->nullable();
            $table->string('start_time')->nullable();
            $table->string('end_time')->nullable();
            $table->string('man_hour')->nullable();
            $table->string('location_from')->nullable();
            $table->string('location_to')->nullable();
            $table->string('odo_start')->nullable();
            $table->string('odo_end')->nullable();
            $table->string('km_used')->nullable();
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
        Schema::dropIfExists('workorder_technicianactivity');
    }
};
