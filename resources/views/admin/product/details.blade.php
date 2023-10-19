@extends('./admin/layout/master')
@section('content')
    <main id="main" class="main">
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Product Details Page</h5>

          <!-- Table with stripped rows -->
          <table class="table table-striped">
                <table class="table table-bordered border-primary">
                    <div class="row">
                        <tbody>
                            <tr>
                                <td class="col-md-3">Product name</td>
                                <td>{{ $product->product_name }}</td>
                            </tr>
                            <tr>
                                <td>Product Title</td>
                                <td>{{ $product->product_title }}</td>
                            </tr>
                            <tr>
                                <td>Image</td>
                                <td><img src="/admin/assets/img/aosomapto.gif" class="rounded float-start img-fluid" alt="..."></td>
                            </tr>
                            <tr>
                                <td>Cost Price</td>
                                <td>{{ $product->cost_price }}</td>
                            </tr>
                            <tr>
                                <td>Sales Price</td>
                                <td>{{ $product->sales_price }}</td>
                            </tr>
                            <tr>
                                <td>Discount Price</td>
                                <td>{{ $product->discount_price }}</td>
                            </tr>
                            <tr>
                                <td>Brand Name</td>
                                <td>{{ $product->brand_name }}</td>
                            </tr>
                            <tr>
                                <td>Rating</td>
                                <td>{{ $product->rating }}*</td>
                            </tr>
                            <tr>
                                <td>Quantity</td>
                                <td>{{ $product->quantity }}</td>
                            </tr>
                            <tr>
                                <td>Minimum Quantity</td>
                                <td>{{ $product->minimum_quantity }}</td>
                            </tr>
                            <tr>
                                <td>Size</td>
                                <td>{{ $product->sizes }}"</td>
                            </tr>
                            <tr>
                                <td>Weight</td>
                                <td>{{ $product->weight }}</td>
                            </tr>
                            <tr>
                                <td>Material</td>
                                <td>{{ $product->material }}</td>
                            </tr>
                            <tr>
                                <td>Color Family</td>
                                <td>{{ $product->color_family }}</td>
                            </tr>
                            <tr>
                                <td>Warranty</td>
                                <td>{{ $product->warranty }}</td>
                            </tr>
                            <tr>
                                <td>Shipping Cost</td>
                                <td>{{ $product->shipping_cost }}</td>
                            </tr>
                            <tr>
                                <td>Product Location</td>
                                <td>{{ $product->product_location }}</td>
                            </tr>
                            <tr>
                                <td>Product Details</td>
                                <td>{{ $product->descriptions }}</tr>
                        </tbody>
                    </div>
                </table>
          </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>
  </main><!-- End #main -->
@endsection


