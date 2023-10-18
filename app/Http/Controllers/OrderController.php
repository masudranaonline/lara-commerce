<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\product;
use Illuminate\Http\Request;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = order::all();
        return view('admin.order.index', compact('orders'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = order::find($id);
        return view('admin.order.details', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $order = order::find($id);
        return view('admin.order.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $order = order::find($id);

        $order->order_number    = $request->order_number;
        $order->product_name    = $request->product_name;
        $order->quantity        = $request->quantity;
        $order->tax             = $request->tax;
        $order->status          = $request->status;
        $order->image           = $request->image;
        $order->order_date      = $request->order_date;
        $order->delivery_date   = $request->delivery_date;
        $order->payment_method  = $request->payment_method;
        $order->mobile_no       = $request->mobile_no;
        $order->email           = $request->email;
        $order->house_no        = $request->house_no;
        $order->road_no         = $request->road_no;
        $order->village         = $request->village;
        $order->sub_district    = $request->sub_district;
        $order->district        = $request->district;
        $order->division        = $request->division;
        $order->country         = $request->country;
        $order->product_details = $request->product_details;

        try {
            $order->save();
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
        order::destroy($id);
        return back();
    }
}
