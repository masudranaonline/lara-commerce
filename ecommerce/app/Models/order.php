<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_number',
        'product_name',
        'quantity',
        'tax',
        'total_amount',
        'status',
        'image',
        'order_date',
        'delivery_date',
        'payment_method',
        'customer_name',
        'mobile_no',
        'email',
        'house_no',
        'road_no',
        'village',
        'sub_district',
        'district',
        'division',
        'country',
        'product_details',
    ];
}
