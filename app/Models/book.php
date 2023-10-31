<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'author_id',
        'publisher_id',
        'name',
        'description',
        'image',
        'cost_price',
        'sales_price',
        'discount_price',
        'rating',
        'quantity',
        'minimum_quantity',
        'pages',
        'edition',
        'origin',
        'language',
        'is_ebook',
        'pdf',
    ];
}
