<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technicianactivity extends Model
{
    use HasFactory;

    protected $table = 'workorder_technicianactivity';
    
    protected $fillable = [
        'techact_no',
        'activity_date',
        'description',
        'start_time',
        'end_time',
        'man_hour',
        'location_from',
        'location_to',
        'odo_start',
        'odo_end',
        'km_used'
    ];
}
