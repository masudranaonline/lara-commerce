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
                                <td>অসমাপ্ত আত্মজীবনী (ডিলাক্স)</td>
                            </tr>
                            <tr>
                                <td>Category Name</td>
                                <td>History</td>
                            </tr>
                            <tr>
                                <td>Image</td>
                                <td><img src="/admin/assets/img/aosomapto.gif" class="rounded float-start img-fluid" alt="..."></td>
                            </tr>
                            <tr>
                                <td>Cost Price</td>
                                <td>250</td>
                            </tr>
                            <tr>
                                <td>Sales Price</td>
                                <td>300</td>
                            </tr>
                            <tr>
                                <td>Discount Price</td>
                                <td>25৳</td>
                            </tr>
                            <tr>
                                <td>Brand Name</td>
                                <td>ABC</td>
                            </tr>
                            <tr>
                                <td>Quantity</td>
                                <td>80</td>
                            </tr>
                            <tr>
                                <td>Shipping Cost</td>
                                <td>120৳</td>
                            </tr>
                            <tr>
                                <td>Product Location</td>
                                <td>Bangladesh</td>
                            </tr>
                            <tr>
                                <td>Product Details</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, eligendi. Eum, vel. Molestias, velit. Temporibus quis eum dignissimos! Nostrum, harum, quae sapiente, labore corrupti vitae tempore sequi quam corporis unde hic mollitia voluptas! Ad assumenda voluptatibus ipsum voluptates iure fugiat suscipit totam ea rerum dignissimos, saepe, officiis repudiandae? Accusantium, doloribus.</td>
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
  