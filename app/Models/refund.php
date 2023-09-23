<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class refund extends Model
{
    use HasFactory;

    protected $fillable = [
        'refund_number',
        'product_name',
        'quantity',
        'refund_amount',
        'image',
        'customer_name',
        'mobile_no',
        'refund_fact',
        'refund_date',
        'vendor_name',
        'company_name',
        'phone_no',
        'email',
    ];
}
