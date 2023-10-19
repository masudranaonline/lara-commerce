<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = customer::all();
        return view('admin.customer.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $customer = new customer();

        $customer->customer_name    = $request->customer_name;
        $customer->mobile_no        = $request->mobile_no;
        $customer->email            = $request->email;
        $customer->password         = $request->password;
        $customer->image            = $request->image;

        $customer->mailing_country  = $request->mailing_country;
        $customer->mailing_division = $request->mailing_division;
        $customer->mailing_district = $request->mailing_district;
        $customer->mailing_sub_district = $request->mailing_sub_district;
        $customer->mailing_village  = $request->mailing_village;
        $customer->mailing_roadno   = $request->mailing_roadno;
        $customer->mailing_houseno  = $request->mailing_houseno;
        $customer->mailing_zip      = $request->mailing_zip;


        $customer->present_country  = $request->present_country;
        $customer->present_division = $request->present_division;
        $customer->present_district = $request->present_district;
        $customer->present_sub_district = $request->present_sub_district;
        $customer->present_village  = $request->present_village;
        $customer->present_roadno   = $request->present_roadno;
        $customer->present_houseno  = $request->present_houseno;
        $customer->present_zip      = $request->present_zip;

        try {
            $customer->save();
            return back()->with('success', 'Customer stored successfully!');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customer = customer::find($id);
        return view('admin.customer.details', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customer = customer::find($id);
        return view('admin.customer.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $customer = customer::find($id);

        $customer->customer_name    = $request->customer_name;
        $customer->mobile_no        = $request->mobile_no;
        $customer->email            = $request->email;
        $customer->password         = $request->password;
        $customer->image            = $request->image;

        $customer->mailing_country  = $request->mailing_country;
        $customer->mailing_division = $request->mailing_division;
        $customer->mailing_district = $request->mailing_district;
        $customer->mailing_sub_district = $request->mailing_sub_district;
        $customer->mailing_village  = $request->mailing_village;
        $customer->mailing_roadno   = $request->mailing_roadno;
        $customer->mailing_houseno  = $request->mailing_houseno;
        $customer->mailing_zip      = $request->mailing_zip;


        $customer->present_country  = $request->present_country;
        $customer->present_division = $request->present_division;
        $customer->present_district = $request->present_district;
        $customer->present_sub_district = $request->present_sub_district;
        $customer->present_village  = $request->present_village;
        $customer->present_roadno   = $request->present_roadno;
        $customer->present_houseno  = $request->present_houseno;
        $customer->present_zip      = $request->present_zip;

        try {
            $customer->save();
            return back()->with('success', 'Customer stored successfully!');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        customer::destroy($id);
        return back();
    }
}
