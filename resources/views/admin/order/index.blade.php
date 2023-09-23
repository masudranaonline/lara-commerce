@extends('./admin/layout/master')
@section('content')
    <main id="main" class="main">
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Order List</h5>

          <!-- Table with stripped rows -->
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Order no</th>
                <th scope="col">Product Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Image</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <th>10001</th>
                <td>অসমাপ্ত আত্মজীবনী (ডিলাক্স)</td>
                <td>1</td>
                <td>250</td>
                <td><img class="img-fluid" src="/admin/assets/img/aosomapto.gif" style="height: 44px; width: 45px;" alt=""></td>
                <td>0</td>
                <td>
                  <a href="order_details.html" class="btn btn-info">view details</a>
                  <a href="#" class="btn btn-warning">Edit</a>
                  <a href="#" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <th>10001</th>
                <td>অসমাপ্ত আত্মজীবনী (ডিলাক্স)</td>
                <td>1</td>
                <td>250</td>
                <td><img class="img-fluid" src="/admin/assets/img/aosomapto.gif" style="height: 44px; width: 45px;" alt=""></td>
                <td>0</td>
                <td>
                  <a href="order_details.html" class="btn btn-info">view details</a>
                  <a href="#" class="btn btn-warning">Edit</a>
                  <a href="#" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <th>10001</th>
                <td>অসমাপ্ত আত্মজীবনী (ডিলাক্স)</td>
                <td>1</td>
                <td>250</td>
                <td><img class="img-fluid" src="/admin/assets/img/aosomapto.gif" style="height: 44px; width: 45px;" alt=""></td>
                <td>0</td>
                <td>
                  <a href="order_details.html" class="btn btn-info">view details</a>
                  <a href="#" class="btn btn-warning">Edit</a>
                  <a href="#" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <th>10001</th>
                <td>অসমাপ্ত আত্মজীবনী (ডিলাক্স)</td>
                <td>1</td>
                <td>250</td>
                <td><img class="img-fluid" src="/admin/assets/img/aosomapto.gif" style="height: 44px; width: 45px;" alt=""></td>
                <td>0</td>
                <td>
                  <a href="order_details.html" class="btn btn-info">view details</a>
                  <a href="#" class="btn btn-warning">Edit</a>
                  <a href="#" class="btn btn-danger">Delete</a>
                </td>
              </tr>
            </tbody>
          </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>
  </main><!-- End #main -->
@endsection
  

 