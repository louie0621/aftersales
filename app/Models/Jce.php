<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jce extends Model
{
    use HasFactory;

    protected $table = 'jce';
    
    protected $fillable = [
        'incidentdatetime',
        'jce_number',
        'customer_id',
        'contact_no',
        'equipment_id',
        'dispatch_date',
        'work_area',
        'labor_amt',
        'srt_amt',
        'parts_amt',
        'job_type',
        'dealer',
        'job_site',
        'salestype',
        'complaint_request',
        'component',
        'typeofissue',
        'promised_datetime',
        'resolved',
        'paymentterms',
        'modeofpayment',
        'po_number',
        'engine_hours',
        'travel_days',
        'technician_id',
        'jce_type',
        'charge_to',
        'jcetypeparts',
        'chargetoparts',
        'srtcode_no',
        'srtcode_total',
        'laborcost_no',
        'laborcost_total',
        'parts_no',
        'parts_total',
        'freight_cost',
        'amount_due',
        'remarks',
        'validity_date'
    ];
}
