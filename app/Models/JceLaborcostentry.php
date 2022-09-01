<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JceLaborcostentry extends Model
{
    use HasFactory;

    protected $table = 'jce_laborcostentry';
    
    protected $fillable = [
        'laborcost_no',
        'laborcost_id',
        'quantity',
        'amount'
    ];
}
