<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'product_type',
        'manufacturer',
        'vendor_name',
        'no_of_pieces',
        'product_dimension',
        'store_name',
        'per_piece_price',
        'total_value',
    ];
}
