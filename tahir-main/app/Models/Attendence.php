<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendence extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'attendence',
        'attendence_date',
        'store_id'
    ];

    // public function staffname()
    // {
    //     return $this->belongsTo(Staff::class, 'full_name');
    // }
}
