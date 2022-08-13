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
        Schema::create('jce', function (Blueprint $table) {
            $table->id();
            $table->string('incidentdatetime')->nullable();
            $table->string('jce_number')->unique();
            $table->integer('customer_id')->nullable();
            $table->string('contact_no')->nullable();
            $table->integer('equipment_id')->nullable();
            $table->string('dispatch_date')->nullable();
            $table->string('work_area')->nullable();
            $table->string('labor_amt')->nullable();
            $table->string('srt_amt')->nullable();
            $table->string('parts_amt')->nullable();
            $table->string('job_type')->nullable();
            $table->string('dealer')->nullable();
            $table->string('job_site')->nullable();
            $table->string('salestype')->nullable();
            $table->string('complaint_request')->nullable();
            $table->string('component')->nullable();
            $table->string('typeofissue')->nullable();
            $table->string('promised_datetime')->nullable();
            $table->string('resolved')->nullable();
            $table->string('paymentterms')->nullable();
            $table->string('modeofpayment')->nullable();
            $table->string('po_number')->nullable();
            $table->string('engine_hours')->nullable();
            $table->string('travel_days')->nullable();
            $table->string('jce_type')->nullable();
            $table->string('charge_to')->nullable();
            $table->string('jcetypeparts')->nullable();
            $table->string('chargetoparts')->nullable();
            $table->integer('srtcode_no')->nullable();
            $table->string('srtcode_total')->nullable();
            $table->integer('laborcost_no')->nullable();
            $table->string('laborcost_total')->nullable();
            $table->integer('parts_no')->nullable();
            $table->string('parts_total')->nullable();
            $table->string('freight_cost')->nullable();
            $table->string('amount_due')->nullable();
            $table->string('remarks')->nullable();
            $table->string('validity_date')->nullable();
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
        Schema::dropIfExists('jce');
    }
};
