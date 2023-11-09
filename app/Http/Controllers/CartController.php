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
    public function store($productId)
    {
        cart::store($productId);
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
