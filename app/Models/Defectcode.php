<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Defectcode extends Model
{
    use HasFactory;

    protected $table = 'config_defect_code';
    
    protected $fillable = [
        'defect_code'
    ];
}
