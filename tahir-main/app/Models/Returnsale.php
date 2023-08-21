<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Returnsale extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'return_amount',
        'return_reason',
        'return_date'
    ];
}
