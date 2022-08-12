<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $fillable = [
        'customercode',
        'customername',
        'address',
        'city',
        'state',
        'tin',
        'phone',
        'contact',
        'email',
        'channelgroup',
        'paymenttermscode',
        'units',
        'creditlimit',
        'brand'
    ];
}
