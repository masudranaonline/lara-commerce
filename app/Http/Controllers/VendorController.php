<?php

namespace App\Http\Controllers;

use App\Models\vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vendors = vendor::all();
        return view('admin.vendor.index', compact('vendors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.vendor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $vendor = new vendor();

        $vendor->vendor_name  = $request->vendor_name;
        $vendor->company_name = $request->company_name;
        $vendor->phone        = $request->phone;
        $vendor->email        = $request->email;
        $vendor->image        = $request->image;

        try {
             $vendor->save();
             return back()->with('success', 'Vender store Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $vendor = vendor::find($id);
        return view('admin.vendor.details', compact('vendor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $vendor = vendor::find($id);
        return view('admin.vendor.edit', compact('vendor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $vendor = vendor::find($id);

        $vendor->vendor_name  = $request->vendor_name;
        $vendor->company_name = $request->company_name;
        $vendor->phone        = $request->phone;
        $vendor->email        = $request->email;
        $vendor->image        = $request->image;

        try {
             $vendor->save();
             return back()->with('success', 'Vender store Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        vendor::destroy($id);
        return back();
    }
}
