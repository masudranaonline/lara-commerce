@extends('frontend/layout/master')

@section('content')
    

    
    <div class="invoice pt-3 pb-5">
        <div class="container product_bg shadow pt-4 pb-5">
            <div class="head">
                <div class="info_date">
                    <img src="/frontend/asset/img/rokomari_logo.png" alt="">
                    <p>Invoice Number:0001</p>
                    <span>Data:03|03|2023</span>
                </div>
                <div class="invc">
                    <h1>Invoice</h1>
                </div>
            </div>
            <div class="Address_info">
                <div class="bill_form">
                    <h6>Bill Form:</h6>
                    <p>Company Name</p>
                    <p>State Address, Zip Code</p>
                    <p>Phone Number</p>
                </div>
                <div class="bill_to">
                   <div class="right">
                        <h6>Bill To:</h6>
                        <p>Customer Name</p>
                        <p>State Address, Zip Code</p>
                        <p>Phone Number</p>
                   </div>
                </div>
            </div>
            <div class="items_info">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Items</th>
                            <th>Quentity</th>
                            <th>Rate</th>
                            <th>Tax</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Lorem ipsum dolor sit amet.</td>
                            <td>30 days</td>
                            <td>$30</td>
                            <td>0.00</td>
                            <td>$30s</td>
                        </tr>
                        <tr>
                            <td>Lorem ipsum dolor sit amet.</td>
                            <td>30 days</td>
                            <td>$30</td>
                            <td>0.00</td>
                            <td>$30s</td>
                        </tr>
                        <tr>
                            <td>Lorem ipsum dolor sit amet.</td>
                            <td>30 days</td>
                            <td>$30</td>
                            <td>0.00</td>
                            <td>$30s</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="total_ammount pt-4 pb-4">
                <table>
                    <tbody>
                        <tr>
                            <td>Svbtotal</td>
                            <td class="all_tka">$330.00</td>
                        </tr>
                        <tr>
                            <td>Discount</td>
                            <td class="all_tka">0.00</td>
                        </tr>
                        <tr>
                            <td>Tax</td>
                            <td class="all_tka">0.00</td>
                        </tr>
                        <tr>
                            <td>Paid</td>
                            <td class="all_tka">0.00</td>
                        </tr>
                    </tbody>
                </table>
               
            </div>
            <div class="total">
                <p>Total <span>$330.00</span></p>
            </div>
        </div>
    </div>

    @endsection


