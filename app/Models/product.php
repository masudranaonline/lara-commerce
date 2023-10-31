<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\category;

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
        'rating_count',
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


    public function category(){
        return $this->belongsTo(category::class, 'category_id', 'id');
    }
}
