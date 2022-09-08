<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Failurecode extends Model
{
    use HasFactory;

    protected $table = 'config_failure_code';
    
    protected $fillable = [
        'failure_code'
    ];
}
