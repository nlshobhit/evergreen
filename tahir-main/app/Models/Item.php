<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'vendor_company_name',
        'item_name',
        'total_piece',
        'per_piece_value',
        'total_amount'
    ];
}
