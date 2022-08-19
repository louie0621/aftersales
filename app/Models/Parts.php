<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parts extends Model
{
    use HasFactory;

    protected $table = 'config_parts';
    
    protected $fillable = [
        'part_number',
        'description',
        'stocks',
        'price'
    ];
}
