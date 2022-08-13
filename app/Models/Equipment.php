<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    protected $table = 'equipment';

    protected $fillable = [
        'serialnumber',
        'vehiclemodel',
        'engineno',
        'brand',
        'description',
        'branch',
        'warrantystart',
        'warrantyend',
        'endcustomer',
        'registrationnumber',
        'endcustomername',
        'endcustomeraddress',
        'endcustomercity',
        'endcustomerstate',
        'endcustomercountry',
        'navcustomercode'
    ];
}
