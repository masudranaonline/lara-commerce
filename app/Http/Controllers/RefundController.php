<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\refund;

class RefundController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $refunds = refund::all();
        return view('admin.refund.index', compact('refunds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.refund.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $refund = new refund();

        $refund->refund_number      = $request->refund_number;
        $refund->product_name       = $request->product_name;
        $refund->quantity           = $request->quantity;
        $refund->refund_amount      = $request->refund_amount;
        $refund->image              = $request->image;
        $refund->customer_name      = $request->customer_name;
        $refund->mobile_no          = $request->mobile_no;
        $refund->refund_fact        = $request->refund_fact;
        $refund->refund_date        = $request->refund_date;
        $refund->vendor_name        = $request->vendor_name;
        $refund->company_name       = $request->company_name;
        $refund->phone_no           = $request->phone_no;
        $refund->email              = $request->email;

        try {
           $refund->save();
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
        $refund = refund::find($id);
        return view('admin.refund.details', compact('refund'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $refund = refund::find($id);
        return view('admin.refund.edit', compact('refund'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $refund = refund::find($id);

        $refund->refund_number      = $request->refund_number;
        $refund->product_name       = $request->product_name;
        $refund->quantity           = $request->quantity;
        $refund->refund_amount      = $request->refund_amount;
        $refund->image              = $request->image;
        $refund->customer_name      = $request->customer_name;
        $refund->mobile_no          = $request->mobile_no;
        $refund->refund_fact        = $request->refund_fact;
        $refund->refund_date        = $request->refund_date;
        $refund->vendor_name        = $request->vendor_name;
        $refund->company_name       = $request->company_name;
        $refund->phone_no           = $request->phone_no;
        $refund->email              = $request->email;



        try {
           $refund->save();
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
        refund::destroy($id);
        return back();
    }
}
