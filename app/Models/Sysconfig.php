<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sysconfig extends Model
{
    use HasFactory;

    protected $table = 'config_jobtype';
    
    protected $fillable = [
        'jobtype'
    ];
}
