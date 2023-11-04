<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    protected $fillable = [
        'tax_parcent',
        'tax_total',
        'discount',
        'total_amount',
        'status',
        'order_date',
        'delivery_date',
        'payment_method',

        'customer_name',
        'mobile_no',
        'email',
        'house_no',
        'road_no',
        'village',
        'upazilla',
        'district',
        'division',
        'country',
    ];
}
