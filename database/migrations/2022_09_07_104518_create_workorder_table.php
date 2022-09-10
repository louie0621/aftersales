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
        Schema::create('workorder', function (Blueprint $table) {
            $table->id();
            $table->string('workorder_date')->nullable();
            $table->string('jce_no')->nullable();
            $table->string('workorder_no')->nullable();
            $table->string('workorder_status')->nullable();
            $table->string('job_summary')->nullable();
            $table->string('repairstart')->nullable();
            $table->string('repairend')->nullable();
            $table->string('service_report')->nullable();
            $table->string('smr')->nullable();
            $table->string('machine_status')->nullable();
            $table->string('servicemodel')->nullable();
            $table->string('arrived_datetime')->nullable();
            $table->string('plateno')->nullable();
            $table->string('remarks')->nullable();
            $table->string('special_instruction')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('defect_code')->nullable();
            $table->string('failure_code')->nullable();
            $table->string('customer_request')->nullable();
            $table->string('cause')->nullable();
            $table->string('service_repair')->nullable();
            $table->string('recommendation')->nullable();
            $table->string('pac_no')->nullable();
            $table->string('pac_total')->nullable();
            $table->string('techact_no')->nullable();
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
        Schema::dropIfExists('workorder');
    }
};
