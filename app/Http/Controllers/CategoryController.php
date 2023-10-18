<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = category::all();
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new category();

        $category->product_name     = $request->product_name;
        $category->category_name    = $request->category_name;
        $category->product_name     = $request->product_name;
        $category->image            = $request->image;
        $category->cost_price       = $request->cost_price;
        $category->sales_price      = $request->sales_price;
        $category->discount         = $request->discount;
        $category->brand_name       = $request->brand_name;
        $category->quantity         = $request->quantity;
        $category->color_family     = $request->color_family;
        $category->warranty         = $request->warranty;
        $category->shipping_cost    = $request->shipping_cost;
        $category->product_location = $request->product_location;
        $category->description      = $request->description;

        try {
            $category->save();
            return back();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = category::find($id);
        return view('admin.category.details', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = category::find($id);
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = category::find($id);

        $category->product_name     = $request->product_name;
        $category->category_name    = $request->category_name;
        $category->product_name     = $request->product_name;
        $category->image            = $request->image;
        $category->cost_price       = $request->cost_price;
        $category->sales_price      = $request->sales_price;
        $category->discount         = $request->discount;
        $category->brand_name       = $request->brand_name;
        $category->quantity         = $request->quantity;
        $category->color_family     = $request->color_family;
        $category->warranty         = $request->warranty;
        $category->shipping_cost    = $request->shipping_cost;
        $category->product_location = $request->product_location;
        $category->description      = $request->description;

        try {
            $category->save();
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
        category::destroy($id);
        return back();
    }
}
