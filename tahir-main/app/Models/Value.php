<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Value extends Model
{
    use HasFactory;

    protected $fillable = [
        'vendor_company_name',
        'total_due',
        'total_advance_paid',
        'total_due_from_vendor',
        'adjustment'
    ];
}
