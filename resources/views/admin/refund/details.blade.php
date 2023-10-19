@extends('./admin/layout/master')
@section('content')

    <main id="main" class="main">
        <div class="card">
            <div class="card-body">
            <h5 class="card-title">Refand Details Page</h5>

            <!-- Table with stripped rows -->
            <table class="table table-striped">
                    <table class="table table-bordered border-primary">
                        <div class="row">
                            <tbody>
                                <tr>
                                    <td class="col-md-3">Refand Number</td>
                                    <td>{{ $refund->refund_number }}</td>
                                </tr>
                                <tr>
                                    <td>Product Name</td>
                                    <td>{{ $refund->product_name }}</td>
                                </tr>
                                <tr>
                                    <td>Quantity</td>
                                    <td>{{ $refund->quantity }}</td>
                                </tr>
                                <tr>
                                    <td>Sales Price</td>
                                    <td>{{ $refund->refund_amount }}</td>
                                </tr>
                                <tr>
                                    <td>Returnded Price</td>
                                    <td>{{ $refund->refund_amount }}</td>
                                </tr>
                                <tr>
                                    <td>Image</td>
                                    <td><img src="/admin/assets/img/aosomapto.gif" class="rounded float-start img-fluid" alt="..."></td>
                                </tr>
                                <tr>
                                    <td>Customer Name</td>
                                    <td>{{ $refund->customer_name }}</td>
                                </tr>
                                <tr>
                                    <td>Mobile No</td>
                                    <td>{{ $refund->mobile_no }}</td>
                                </tr>
                                <tr>
                                    <td>Return fact</td>
                                    <td>{{ $refund->refund_fact }}</td>
                                </tr>
                                <tr>
                                    <td>Return Date</td>
                                    <td>{{ $refund->refund_date }}</td>
                                </tr>
                                <tr>
                                    <td>Vendor Name</td>
                                    <td>{{ $refund->vendor_name }}</td>
                                </tr>
                                <tr>
                                    <td>Company Name</td>
                                    <td>{{ $refund->company_name }}</td>
                                </tr>
                                <tr>
                                    <td>Phone No</td>
                                    <td>{{ $refund->phone_no }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{ $refund->email }}</td>
                                </tr>
                                
                            </tbody>
                        </div>
                    </table>
            </table>
            <!-- End Table with stripped rows -->

            </div>
        </div>
    </main><!-- End #main -->

  @endsection