<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Techactivity extends Model
{
    use HasFactory;

    protected $table = 'config_tech_activity';
    
    protected $fillable = [
        'tech_activity'
    ];
}   
