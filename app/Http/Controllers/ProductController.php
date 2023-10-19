<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = product::all();

        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $product = new product();

        $product->product_name      = $request->product_name;
        $product->product_title     = $request->product_title;
        $product->image             = $request->image;
        $product->cost_price        = $request->cost_price;
        $product->cost_price        = $request->cost_price;
        $product->sales_price       = $request->sales_price;
        $product->discount_price    = $request->discount_price;
        $product->brand_name        = $request->brand_name;
        $product->rating            = $request->rating;
        $product->quantity          = $request->quantity;
        $product->minimum_quantity  = $request->minimum_quantity;
        $product->sizes             = $request->sizes;
        $product->weight            = $request->weight;
        $product->material          = $request->material;
        $product->material          = $request->material;
        $product->color_family      = $request->color_family;
        $product->warranty          = $request->warranty;
        $product->shipping_cost     = $request->shipping_cost;
        $product->product_location  = $request->product_location;
        $product->descriptions      = $request->descriptions;

        try {
            $product->save();
            return back()->with('success', 'Product saved successfully');
        } catch (\Throwable $th) {
            throw $th;
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = product::find($id);
        return view('admin.product.details', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = product::find($id);
        return view('admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = product::find($id);

        $product->product_name      = $request->product_name;
        $product->product_title     = $request->product_title;
        $product->image             = $request->image;
        $product->cost_price        = $request->cost_price;
        $product->cost_price        = $request->cost_price;
        $product->sales_price       = $request->sales_price;
        $product->discount_price    = $request->discount_price;
        $product->brand_name        = $request->brand_name;
        $product->rating            = $request->rating;
        $product->quantity          = $request->quantity;
        $product->minimum_quantity  = $request->minimum_quantity;
        $product->sizes             = $request->sizes;
        $product->weight            = $request->weight;
        $product->material          = $request->material;
        $product->material          = $request->material;
        $product->color_family      = $request->color_family;
        $product->warranty          = $request->warranty;
        $product->shipping_cost     = $request->shipping_cost;
        $product->product_location  = $request->product_location;
        $product->descriptions      = $request->descriptions;

        try {
            $product->save();
            return back();
        } catch (\Throwable $th) {
            throw $th;
        }


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        product::destroy($id);
        return  back();
    }
}
