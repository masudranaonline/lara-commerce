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

        $product->category_id       = $request->category_id;
        $product->name              = $request->name;
        $product->image             = $request->image;
        $product->cost_price        = $request->cost_price;
        $product->sales_price       = $request->sales_price;
        $product->discount_price    = $request->discount_price;
        $product->brand             = $request->brand;
        $product->rating            = $request->rating;
        $product->quantity          = $request->quantity;
        $product->minimum_quantity  = $request->minimum_quantity;
        $product->sizes             = $request->sizes;
        $product->weight            = $request->weight;
        $product->materials         = $request->materials;
        $product->color             = $request->color;
        $product->warranty          = $request->warranty;
        $product->origin            = $request->origin;
        $product->description      = $request->description;

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

        $product->category_id       = $request->category_id;
        $product->name              = $request->name;
        $product->image             = $request->image;
        $product->cost_price        = $request->cost_price;
        $product->sales_price       = $request->sales_price;
        $product->discount_price    = $request->discount_price;
        $product->brand             = $request->brand;
        $product->rating            = $request->rating;
        $product->quantity          = $request->quantity;
        $product->minimum_quantity  = $request->minimum_quantity;
        $product->sizes             = $request->sizes;
        $product->weight            = $request->weight;
        $product->materials         = $request->materials;
        $product->color             = $request->color;
        $product->warranty          = $request->warranty;
        $product->origin            = $request->origin;
        $product->description      = $request->description;

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
