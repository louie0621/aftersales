<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workorder extends Model
{
    use HasFactory;

    protected $table = 'workorder';
    
    protected $fillable = [
        'workorder_date',
        'jce_no',
        'workorder_no',
        'job_summary',
        'repairstart',
        'repairend',
        'service_report',
        'smr',
        'machine_status',
        'servicemodel',
        'arrived_datetime',
        'plateno',
        'remarks',
        'special_instruction',
        'customer_name',
        'defect_code',
        'failure_code',
        'customer_request',
        'cause',
        'service_repair',
        'recommendation',
        'pac_no',
        'pac_total',
        'techact_no'
    ];
}
