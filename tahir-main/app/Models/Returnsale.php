<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Returnsale extends Model
{
    use HasFactory;

    protected $fillable = [
        'sale_id',
        'return_amount',
        'return_reason',
        'return_date'
    ];
    public function returnsale(){
        return $this->belongsTo(Sale::class,'sale_id','id');
    }
}
