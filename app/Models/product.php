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
        'weight',
        'material',
        'color_family',
        'warranty',
        'shipping_cost',
        'product_location',
        'descriptions',
    ];
}
