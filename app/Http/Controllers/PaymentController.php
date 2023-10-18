<?php

namespace App\Http\Controllers;

use App\Models\payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = payment::all();
        return view('admin.payment.index', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.payment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $payment = new payment();

        $payment->payment_method        = $request->payment_method;
        $payment->payment_number        = $request->payment_number;
        $payment->account_holder_name   = $request->account_holder_name;
        $payment->account_no            = $request->account_no;
        $payment->branch_name           = $request->branch_name;


        try {
            $payment->save();
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
        $payment = payment::find($id);
        return view('admin.payment.details', compact('payment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $payment = payment::find($id);
        return view('admin.payment.edit', compact('payment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $payment = payment::find($id);

        $payment->payment_method        = $request->payment_method;
        $payment->payment_number        = $request->payment_number;
        $payment->account_holder_name   = $request->account_holder_name;
        $payment->account_no            = $request->account_no;
        $payment->branch_name           = $request->branch_name;


        try {
            $payment->save();
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
        payment::destroy($id);
        return back();
    }
}
