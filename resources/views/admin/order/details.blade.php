@extends('./admin/layout/master')
@section('content')
      <main id="main" class="main">
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Order Details Page</h5>

          <!-- Table with stripped rows -->
          <table class="table table-striped">
                <table class="table table-bordered border-primary">
                    <div class="row">
                        <tbody>
                          <tr>
                            <td class="col-md-3">Order Number</td>
                            <td>{{ $order->order_number}}</td>
                        </tr>
                            <tr>
                                <td class="col-md-3">Product Name</td>
                                <td>{{ $order->product_name}}</td>
                            </tr>
                            <tr>
                                <td class="col-md-3">Quantity</td>
                                <td>{{ $order->quantity}}</td>
                            </tr>
                            <tr>
                              <td>Tax</td>
                              <td>{{ $order->tax}}</td>
                          </tr>
                            <tr>
                                <td>Price</td>
                                <td>{{ $order->total_amount}}</td>
                            </tr>

                            <tr>
                                <td>Status</td>
                                <td>{{ $order->status}}</td>
                            </tr>
                            <tr>
                                <td>Image</td>
                                <td><img src="/admin/assets/img/aosomapto.gif" class="rounded float-start img-fluid" alt="..."></td>
                            </tr>
                            <tr>
                                <td>Order Date</td>
                                <td>{{ $order->order_date}}</td>
                            </tr>
                            <tr>
                                <td>Delivary Date</td>
                                <td>{{ $order->delivery_date}}</td>
                            </tr>
                            <tr>
                                <td>Payment Method</td>
                                <td>{{ $order->payment_method}}</td>
                            </tr>
                            <tr>
                                <td>Customer Name</td>
                                <td>{{ $order->customer_name}}</td>
                            </tr>
                            <tr>
                                <td>Mobile No</td>
                                <td>{{ $order->mobile_no}}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $order->email}}</td>
                            </tr>
                            <tr>
                                <td>House no</td>
                                <td>{{ $order->house_no}}</td>
                            </tr>
                            <tr>
                                <td>Road No</td>
                                <td>{{ $order->road_no}}</td>
                            </tr>
                            <tr>
                                <td>Village</td>
                                <td>{{ $order->village}}</td>
                            </tr>
                            <tr>
                                <td>Sub District</td>
                                <td>{{ $order->sub_district}}</td>
                            </tr>
                            <tr>
                                <td>District</td>
                                <td>{{ $order->district}}</td>
                            </tr>
                            <tr>
                                <td>Division</td>
                                <td>{{ $order->division}}</td>
                            </tr>
                            <tr>
                                <td>Country</td>
                                <td>{{ $order->country}}</td>
                            </tr>

                            <tr>
                                <td>Product Details</td>
                                <td>{{ $order->product_details}}</tr>
                        </tbody>
                    </div>
                </table>
          </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>
  </main><!-- End #main -
@endsection
->

