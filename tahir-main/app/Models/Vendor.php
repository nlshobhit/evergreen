<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $fillable = [
            'vendor_company_name',
            'vendor_representative_name',
            'vendor_product',
            'vendor_from',
            'date',
            'vendor_address',
            'vendor_billing_details',
            'others',
    ];
}
