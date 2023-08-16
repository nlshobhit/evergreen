<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'department',
        'date_of_joining',
        'mobile_number',
        'address',
        'salary',
        'shift_timing',
        'add_incentive'
    ];
}
