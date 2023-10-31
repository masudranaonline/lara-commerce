<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'image',
        'cost_price',
        'sales_price',
        'discount_price',
        'brand',
        'rating',
        'quantity',
        'minimum_quantity',
        'sizes',
        'weight',
        'materials',
        'color',
        'warranty',
        'origin',
        'description',
    ];
}
