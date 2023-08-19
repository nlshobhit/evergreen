<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

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

    protected $casts = [
        'product_name' => 'array',
        'no_of_pieces' => 'array',
        'cost' => 'array',
        'full_name' => 'array',
        'add_incentive' => 'array',
        'percentage' => 'array',
    ];

    protected function product_name(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_encode($value),
        );
    }
    protected function no_of_pieces(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_encode($value),
        );
    }
    protected function cost(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_encode($value),
        );
    }
    protected function full_name(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_encode($value),
        );
    }
    protected function add_incentive(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_encode($value),
        );
    }
    protected function percentage(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_encode($value),
        );
    }


}
