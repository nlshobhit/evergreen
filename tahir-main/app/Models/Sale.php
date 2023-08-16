<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'customer_name',
        'customer_number',
        'customer_location',
        'product_name',
        'no_of_pieces',
        'cost',
        'cost_price',
        'sold_price',
        'profit_loss',
        'advance_payment',
        'pending_payment',
        'full_name',
        'add_incentive',
        'percentage'
    ];

    public function staffname()
    {
        return $this->belongsTo(Staff::class, 'full_name');
    }


}
