<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'quantity',
        'cart_number',
        'image',
        'sales_price',
        'voucher_no',
        'total_amount',
        'color_family',
        'warranty',
        'payment_method',
        'shipping_cost',
    ];
}
