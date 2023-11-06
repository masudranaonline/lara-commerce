<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cart;
use Illuminate\Support\Facades\Auth;
use App\Models\order;
use App\Models\orderProductMapping;
use Carbon\Carbon;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $cart = cart::where('user_id', Auth::id())->get();
        $total = 0;
        foreach ($cart as $item){
            $total += $item->total;
        }

        $countries = json_decode(file_get_contents(storage_path('data/countries.json')), true);
        return view('frontend.checkout', compact('total', 'countries'));
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
        $order = new order();
        $order->user_id         = Auth::id();
        $order->total_amount    = $request->total_amount;
        $order->order_date      = Carbon::now();
        $order->customer_name   = $request->customer_name;
        $order->mobile_no       = $request->mobile_no;
        $order->email           = $request->email;
        $order->payment_method  = 'cash';

        $order->country     = $request->country;
        $order->division    = $request->division;
        $order->district    = $request->district;
        $order->upazilla    = $request->upazilla;
        $order->union       = $request->union;
        $order->address     = $request->address;

        $order->save();

        $cart = cart::where('user_id', Auth::id())->get();

        foreach($cart as $item){
            orderProductMapping::create([
                'order_id'      => $order->id,
                'product_id'    => $item->product_id,
                'quantity'      => $item->quantity,
                'price'         => $item->price,
                'total_price'   => $item->total,
            ]);
        }

        cart::where('user_id', Auth::id())->delete();

        return view('frontend.home');
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
        //
    }
}
