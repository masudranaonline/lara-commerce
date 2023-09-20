<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'product_title',
        'image',
        'cost_price',
        'sales_price',
        'discount_price',
        'brand_name',
        'rating',
        'quantity',
        'minimum_quantity',
        'sizes',
        'wigth',
        'material',
        'color_family',
        'warranty',
        'shippint_cost',
        'product_location',
        'description',
    ];
}
