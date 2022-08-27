<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JceTechnicianentry extends Model
{
    use HasFactory;
    protected $table = 'jce_techicianentry';
    
    protected $fillable = [
        'techentry_no',
        'tech_id'
    ];

}
