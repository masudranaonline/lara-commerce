<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\cart;

class WishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wishItems = wishlist::with('product.category')->where('user_id', Auth::id())->get();
        return view('frontend.wish_list', compact('wishItems'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $productId)
    {
        $user_wishlist = wishlist::where('product_id', $productId)->where('user_id', Auth::id())->first();

        if($user_wishlist == null) {
            $product = product::find($productId);

            $wishlist = new wishlist();

            $wishlist->product_id = $productId;
            $wishlist->user_id = Auth::id();
            $wishlist->quantity = 1;
            $wishlist->price = $product->sales_price;
            $wishlist->total = $product->sales_price;

            $wishlist->save();

        }else {
            return back();
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
        wishlist::destroy($id);
        return back();
    }

    public function addToCart($productId){
        cart::store($productId);
        wishlist::where('product_id', $productId)->delete();
        return back();
    }
}
