<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product;
use Illuminate\Support\Facades\Auth;

class cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'quantity',
        'price',
        'total',
    ];

    public function product(){
        return $this->belongsTo(product::class, 'product_id', 'id');
    }

    public static function store($productId)
    {
        $user_cart_item = cart::where('product_id', $productId)
            ->where('user_id', Auth::id())
            ->first();

        $product = product::find($productId);

        if($user_cart_item == null){
            $cart  = new cart();

            $cart->product_id = $productId;
            $cart->user_id = Auth::id();
            $cart->quantity = 1;
            $cart->price = $product->sales_price;
            $cart->total = $product->sales_price;

            $cart->save();
        }else{
            $user_cart_item->quantity += 1;
            $user_cart_item->price = $product->sales_price;
            $user_cart_item->total = $user_cart_item->quantity * $user_cart_item->price;
            $user_cart_item->save();
        }
    }
}
