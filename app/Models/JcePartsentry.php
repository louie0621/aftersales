<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JcePartsentry extends Model
{
    use HasFactory;

    protected $table = 'jce_partsentry';
    
    protected $fillable = [
        'parts_no',
        'parts_id',
        'quantity',
        'disc_percent',
        'disc_amt',
        'total_amt'
    ];
}
