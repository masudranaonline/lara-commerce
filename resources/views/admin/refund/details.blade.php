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
                                    <td>246432165</td>
                                </tr>
                                <tr>
                                    <td>Product Name</td>
                                    <td>অসমাপ্ত আত্মজীবনী (ডিলাক্স)</td>
                                </tr>
                                <tr>
                                    <td>Quantity</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Sales Price</td>
                                    <td>5000</td>
                                </tr>
                                <tr>
                                    <td>Returnded Price</td>
                                    <td>5000</td>
                                </tr>
                                <tr>
                                    <td>Image</td>
                                    <td><img src="/admin/assets/img/aosomapto.gif" class="rounded float-start img-fluid" alt="..."></td>
                                </tr>
                                <tr>
                                    <td>Customer Name</td>
                                    <td>Ariful Islam</td>
                                </tr>
                                <tr>
                                    <td>Mobile No</td>
                                    <td>01985545221</td>
                                </tr>
                                <tr>
                                    <td>Return fact</td>
                                    <td>Damage</td>
                                </tr>
                                <tr>
                                    <td>Return Date</td>
                                    <td>15-09-23</td>
                                </tr>
                                <tr>
                                    <td>Vendor Name</td>
                                    <td>Ashik Hossian</td>
                                </tr>
                                <tr>
                                    <td>Company Name</td>
                                    <td>Beximco</td>
                                </tr>
                                <tr>
                                    <td>Phone No</td>
                                    <td>+8462261121</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>email@gmail.com</td>
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