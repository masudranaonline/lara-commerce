@extends('./admin/layout/master')
@section('content')


    <main id="main" class="main">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Update Refund</h5>

            <!-- Multi Columns Form -->
            {{ Form::open([
                'url' => '/admin-panel/refund/update/'.$refund->id,
                'method' => 'POST',
                'enctype' => 'multipart/form-data',
                ])
              }}
                <div class="row g-3">
                    <div class="col-md-12">
                        <label for="inputName5" class="form-label">Refund Number</label>
                        <input type="text" class="form-control" id="inputName5" name="refund_number" value="{{ $refund->refund_number}}">
                    </div>
                    <div class="col-md-6">
                        <label for="product_name" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="product_name" name="product_name" value="{{ $refund->product_name}}">
                    </div>
                    <div class="col-md-6">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="text" class="form-control" id="quantity"  name="quantity" value="{{ $refund->quantity}}">
                    </div>
                    <div class="col-md-6">
                        <label for="refund_amount" class="form-label">Returned  Price</label>
                        <input type="text" class="form-control" id="refund_amount" name="refund_amount" value="{{ $refund->refund_amount}}">
                    </div>
                    <div class="row">
                        <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                        <div class=" col-md-12">
                        <input class="form-control" type="file" id="formFile">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="customer_name" class="form-label">Customer Name</label>
                        <input type="text" class="form-control" id="customer_name" name="customer_name" value="{{ $refund->customer_name}}">
                    </div>
                    <div class="col-md-6">
                    <label for="mobile_no" class="form-label">Mobile No</label>
                        <input type="text" class="form-control" id="mobile_no" name="mobile_no" value="{{ $refund->mobile_no}}">
                    </div>
                    <div class="col-md-6">
                        <label for="refund_fact" class="form-label">Refund fact</label>
                        <input type="text" class="form-control" id="refund_fact" name="refund_fact" value="{{ $refund->refund_fact}}">
                        </div>
                        <div class="col-md-6">
                        <label for="refund_date" class="form-label">Return Date</label>
                        <input type="text" class="form-control" id="refund_date" name="refund_date" value="{{ $refund->refund_date}}">
                        </div>

                        <div class="col-md-6">
                        <label for="vendor_name" class="form-label">Vendor Name</label>
                            <input type="text" class="form-control" id="vendor_name" name="vendor_name" value="{{ $refund->vendor_name}}">
                        </div>
                        <div class="col-md-6">
                            <label for="company_name" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="company_name" name="company_name" value="{{ $refund->company_name}}">
                        </div>
                        <div class="col-md-6">
                            <label for="phone_no" class="form-label">Phone No</label>
                            <input type="text" class="form-control" id="phone_no" name="phone_no" value="{{ $refund->phone_no}}">
                            </div>
                            <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{ $refund->email}}">
                            </div>           
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            {{ Form::close() }}
        </div>
        </div>
  </main><!-- End #main -->



  @endsection