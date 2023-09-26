@extends('./admin/layout/master')
@section('content')
  <main id="main" class="main">
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Cart Details Page</h5>

          <!-- Table with stripped rows -->
          <table class="table table-striped">
                <table class="table table-bordered border-primary">
                    <div class="row">
                        <tbody>
                            <tr>
                                <td class="col-md-3">Product name</td>
                                <td>অসমাপ্ত আত্মজীবনী (ডিলাক্স)</td>
                            </tr>
                            <tr>
                                <td>Cart No</td>
                                <td>5646464840</td>
                            </tr>
                            <tr>
                                <td>Quantity</td>
                                <td>5646464840</td>
                            </tr>
                            <tr>
                                <td>Image</td>
                                <td><img src="/admin/assets/img/aosomapto.gif" class="rounded float-start img-fluid" alt="..."></td>
                            </tr>
                            <tr>
                                <td>Sales price</td>
                                <td>অসমাপ্ত আত্মজীবনী (ডিলাক্স)</td>
                            </tr>
                            <tr>
                                <td>Vouchar No</td>
                                <td>200</td>
                            </tr>
                            <tr>
                                <td>Total Price</td>
                                <td>25৳</td>
                            </tr>
                            <tr>
                                <td>Color</td>
                                <td>ABC</td>
                            </tr>
                            <tr>
                                <td>Warranty</td>
                                <td>4.5*</td>
                            </tr>
                            <tr>
                                <td>Payment Method</td>
                                <td>80</td>
                            </tr>
                            <tr>
                                <td>Shippint Cost</td>
                                <td>15</td>
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
  