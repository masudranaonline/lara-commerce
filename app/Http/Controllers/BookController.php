<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = book::all();
        return view('admin.book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $book = new book();

        $book->category_id      = $request->category_id;
        $book->author_id        = $request->author_id;
        $book->publisher_id     = $request->publisher_id;
        $book->name             = $request->name;
        $book->image            = $request->image;
        $book->cost_price       = $request->cost_price;
        $book->sales_price      = $request->sales_price;
        $book->discount_price   = $request->discount_price;
        $book->rating           = $request->rating;
        $book->quantity         = $request->quantity;
        $book->minimum_quantity = $request->minimum_quantity;
        $book->pages            = $request->pages;
        $book->edition          = $request->edition;
        $book->origin           = $request->origin;
        $book->language         = $request->language;
        $book->is_ebook         = $request->is_ebook;
        $book->pdf              = $request->pdf;
        $book->description      = $request->description;


        try {
            $book->save();
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
        $book = book::find($id);
        return view('admin.book.details', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = book::find($id);
        return view('admin.book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $book = book::find($id);
        $book->category_id      = $request->category_id;
        $book->author_id        = $request->author_id;
        $book->publisher_id     = $request->publisher_id;
        $book->name             = $request->name;
        $book->image            = $request->image;
        $book->cost_price       = $request->cost_price;
        $book->sales_price      = $request->sales_price;
        $book->discount_price   = $request->discount_price;
        $book->rating           = $request->rating;
        $book->quantity         = $request->quantity;
        $book->minimum_quantity = $request->minimum_quantity;
        $book->pages            = $request->pages;
        $book->edition          = $request->edition;
        $book->origin           = $request->origin;
        $book->language         = $request->language;
        $book->is_ebook         = $request->is_ebook;
        $book->pdf              = $request->pdf;
        $book->description      = $request->description;


        try {
            $book->save();
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
        book::destroy($id);
        return back();
    }
}
