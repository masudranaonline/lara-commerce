@extends('./admin/layout/master')
@section('content')
     <main id="main" class="main">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Order Update Page</h5>

        <!-- Multi Columns Form -->
        {{ Form::open([
            'url' => '/admin-panel/order/update/'.$order->id,
            'method' => 'POST',
            'enctype' => 'multipart/form-data',
            ])
          }}
            <div class="row g-3">
            <div class="col-md-12">
                <label for="inputName5" class="form-label">Order Number</label>
                <input type="text" class="form-control" id="inputName5" name="order_number" value="{{ $order->order_number }}">
            </div>
            <div class="col-md-12">
                <label for="product_name" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="product_name" name="product_name" value="{{ $order->product_name }}">
            </div>
            <div class="col-md-4">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="text" class="form-control" id="quantity" name="quantity" value="{{ $order->quantity }}">
            </div>
            <div class="col-md-4">
                <label for="tax" class="form-label">Tax</label>
                <input type="text" class="form-control" id="tax" name="tax" value="{{ $order->tax }}">
            </div>
            <div class="col-md-4">
                <label for="total_amount" class="form-label">Price</label>
                <input type="text" class="form-control" id="total_amount" name="total_amount" value="{{ $order->total_amount }}">
            </div>

            <div class="row">
                <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                <div class=" col-md-12">
                <input class="form-control" type="file" id="formFile">
                </div>
            </div>

            <div class="col-md-6">
                <label for="order_date" class="form-label">Order Date</label>
                <input type="text" class="form-control" id="order_date" name="order_date" value="{{ $order->order_date }}">
            </div>
            <div class="col-md-6">
                <label for="delivery_date" class="form-label">Delivery Date</label>
                <input type="text" class="form-control" id="delivery_date" name="delivery_date" value="{{ $order->delivery_date }}">
            </div>
            <div class="col-md-13">
                <label for="payment_method" class="form-label">Payment Method</label>
                <input type="text" class="form-control" id="payment_method" name="payment_method" value="{{ $order->payment_method }}">
            </div>

            <div class="col-md-12">
                <label for="customer_name" class="form-label">Customer Name</label>
                <input type="text" class="form-control" id="customer_name" name="customer_name" value="{{ $order->customer_name }}">
            </div>
            <div class="col-md-6">
                <label for="mobile_no" class="form-label">Mobile No</label>
                <input type="text" class="form-control" id="mobile_no" name="mobile_no" value="{{ $order->mobile_no }}">
            </div>
            <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ $order->email }}">
            </div>

            <div class="col-md-4">
                <label for="house_no" class="form-label">House NO</label>
                <input type="text" class="form-control" id="house_no" name="house_no" value="{{ $order->house_no }}">
            </div>
            <div class="col-md-4">
                <label for="road_no" class="form-label">Road No</label>
                <input type="text" class="form-control" name="road_no" value="{{ $order->road_no }}">
            </div>
            <div class="col-md-4">
                <label for="village" class="form-label">Village</label>
                <input type="text" class="form-control" id="village" name="village" value="{{ $order->village }}">
            </div>

            <div class="col-md-6">
                <label for="sub_district" class="form-label">Sub district</label>
                <input type="text" class="form-control" id="sub_district" name="sub_district" value="{{ $order->sub_district }}">
                </div>
                <div class="col-md-6">
                <label for="district" class="form-label">District</label>
                <input type="text" class="form-control" id="district" name="district" value="{{ $order->district }}">
                </div>

                <div class="col-md-6">
                <label for="division" class="form-label">Divition</label>
                    <input type="text" class="form-control" id="division" name="division" value="{{ $order->division }}">
                </div>
                <div class="col-md-6">
                    <label for="country" class="form-label">Country</label>
                    <input type="text" class="form-control" id="country" name="country" value="{{ $order->country }}">
                </div>
                <div class="col-md-12">
                    <label for="inputPassword5" class="form-label">Product Details</label>
                    <textarea class="form-control" rows="5" style="width: 100%;" name="" id="" ">
                        {{ $order->product_details}}
                    </textarea>
                </div>



            <div class="text-center">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </div><!-- End Multi Columns Form -->
        {{ Form::close() }}
      </div>
    </div>
  </main><!-- End #main -->
@endsection


