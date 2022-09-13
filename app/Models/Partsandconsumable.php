<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partsandconsumable extends Model
{
    use HasFactory;

    protected $table = 'workorder_partsandconsumable';
    
    protected $fillable = [
        'pac_no',
        'part_id',
        'quantity',
        'total'
    ];
}
