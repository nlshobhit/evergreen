<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    use HasFactory;

    protected $fillable = [
        'transport_type',
        'transport_amount',
        'transport_location',
        'date',
        'product_id'
    ];

    public function sale(){
        return $this->belongsTo(Sale::class,'product_id','id');
    }
}
