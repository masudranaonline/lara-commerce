<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cart;
use Illuminate\Support\Facades\Auth;
use App\Models\product;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cartItems = cart::with('product.category')->where('user_id', Auth::id())->get();
        return view('frontend.cart', compact('cartItems'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $productId)
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
        return back();
    }

    public function increase(string $id){
        $cartItem = cart::find($id);
        $cartItem->quantity += 1;
        $cartItem->total += $cartItem->price;
        $cartItem->save();

        return back();
    }

    public function decrease(string $id){
        $cartItem = cart::find($id);
        $cartItem->quantity -= 1;

        if($cartItem->quantity == 0){
            cart::destroy($id);
        }
        else{
            $cartItem->total -= $cartItem->price;
            $cartItem->save();
        }

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        cart::destroy($id);
        return back();
    }
}
