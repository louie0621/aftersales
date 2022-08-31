<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JceSrtcodeentry extends Model
{
    use HasFactory;

    protected $table = 'jce_srtcodeentry';
    
    protected $fillable = [
        'srtcode_no',
        'srt_code',
        'description',
        'working_unit'
    ];
}
