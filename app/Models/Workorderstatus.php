<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workorderstatus extends Model
{
    use HasFactory;

    protected $table = 'config_workorderstatus';
    
    protected $fillable = [
        'workorderstatus'
    ];
}
