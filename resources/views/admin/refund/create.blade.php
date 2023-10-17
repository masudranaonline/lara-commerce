@extends('./admin/layout/master')
@section('content')


    <main id="main" class="main">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Add Refund</h5>

            <!-- Multi Columns Form -->
            <!-- End Multi Columns Form -->
            {{ Form::open([
                'url' => 'admin-panel/refund/store',
                'method' => 'POST',
                'enctype' => 'multipart/form-data',
                ])
            }}
                <div class="row g-3">
                    <div class="col-md-12">
                        <label for="refund_number" class="form-label">Refund Number</label>
                        <input type="text" class="form-control" name="refund_number" id="refund_number">
                    </div>
                    <div class="col-md-6">
                        <label for="product_name" class="form-label">Product Name</label>
                        <input type="text" class="form-control" name="product_name" id="product_name">
                    </div>
                    <div class="col-md-6">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="text" class="form-control" name="quantity" id="quantity" >
                    </div>
                    {{-- <div class="col-md-6">
                        <label for="refund_amount" class="form-label">Sales Price</label>
                        <input type="text" class="form-control" name="refund_amount" id="refund_amount" >
                    </div> --}}
                    <div class="col-md-6">
                        <label for="refund_amount" class="form-label">Returned  Price</label>
                        <input type="text" class="form-control" name="refund_amount" id="refund_amount" >
                    </div>
                    <div class="row">
                        <label for="image" class="col-sm-2 col-form-label">File Upload</label>
                        <div class=" col-md-12">
                        <input class="form-control" type="file" name="image" id="image">
                        </div>
                    </div>



                    <div class="col-md-6">
                        <label for="customer_name" class="form-label">Customer Name</label>
                        <input type="text" class="form-control" name="customer_name" id="customer_name">
                    </div>
                    <div class="col-md-6">
                    <label for="mobile_no" class="form-label">Mobile No</label>
                        <input type="text" class="form-control" name="mobile_no" id="mobile_no">
                    </div>


                    <div class="col-md-6">
                        <label for="refund_fact" class="form-label">Refund fact</label>
                        <input type="text" class="form-control" name="refund_fact" id="refund_fact">
                        </div>
                        <div class="col-md-6">
                        <label for="refund_date" class="form-label">Return Date</label>
                        <input type="text" class="form-control" name="refund_date" id="refund_date">
                        </div>

                        <div class="col-md-6">
                        <label for="vendor_name" class="form-label">Vendor Name</label>
                            <input type="text" class="form-control" name="vendor_name" id="vendor_name">
                        </div>
                        <div class="col-md-6">
                            <label for="company_name" class="form-label">Company Name</label>
                            <input type="text" class="form-control" name="company_name" id="company_name">
                        </div>
                        <div class="col-md-6">
                            <label for="phone_no" class="form-label">Phone No</label>
                            <input type="text" class="form-control" name="phone_no" id="phone_no">
                            </div>
                            <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" id="email">
                            </div>


                    
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            {{ Form::close()}}

        </div>
        </div>
  </main><!-- End #main -->







  @endsection