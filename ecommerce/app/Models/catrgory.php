<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catrgory extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'category_name',
        'image',
        'cost_price',
        'sales_price',
        'discount',
        'brand_name',
        'quantity',
        'color_family',
        'warranty',
        'shipping_cost',
        'product_location',
        'description',
    ];
}
