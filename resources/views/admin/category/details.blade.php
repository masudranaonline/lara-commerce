@extends('./admin/layout/master')
@section('content')
  <main id="main" class="main">
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Category Details Page</h5>

          <!-- Table with stripped rows -->
          <table class="table table-striped">
                <table class="table table-bordered border-primary">
                    <div class="row">
                        <tbody>
                            <tr>
                                <td class="col-md-3">Product name</td>
                                <td>{{ $category->product_name }}</td>
                            </tr>
                            <tr>
                                <td>Category Name</td>
                                <td>{{ $category->category_name }}</td>
                            </tr>
                            <tr>
                                <td>Image</td>
                                <td><img src="/admin/assets/img/aosomapto.gif" class="rounded float-start img-fluid" alt="..."></td>
                            </tr>
                            <tr>
                                <td>Cost Price</td>
                                <td>{{ $category->cost_price }}</td>
                            </tr>
                            <tr>
                                <td>Sales Price</td>
                                <td>{{ $category->sales_price }}</td>
                            </tr>
                            <tr>
                                <td>Discount Price</td>
                                <td>{{ $category->discount }}৳</td>
                            </tr>
                            <tr>
                                <td>Brand Name</td>
                                <td>{{ $category->brand_name }}</td>
                            </tr>
                            <tr>
                                <td>Quantity</td>
                                <td>{{ $category->quantity }}</td>
                            </tr>
                            <tr>
                                <td>Color</td>
                                <td>{{ $category->color_family }}</td>
                            </tr>
                            <tr>
                                <td>Warranty</td>
                                <td>{{ $category->warranty }}</td>
                            </tr>
                            <tr>
                                <td>Shipping Cost</td>
                                <td>{{ $category->shipping_cost }}</td>
                            </tr>
                            <tr>
                                <td>Product Location</td>
                                <td>{{ $category->product_location }}</td>
                            </tr>
                            <tr>
                                <td>Product Details</td>
                                <td>{{ $category->description }}</tr>
                        </tbody>
                    </div>
                </table>
          </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>
  </main><!-- End #main -->

 @endsection
  