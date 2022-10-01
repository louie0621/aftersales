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
        Schema::create('config_parts', function (Blueprint $table) {
            $table->id();
            $table->string('part_number')->nullable();
            $table->string('description')->nullable();
            $table->string('item_category_code')->nullable();
            $table->string('uom')->nullable();
            $table->string('srp')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('config_parts');
    }
};
