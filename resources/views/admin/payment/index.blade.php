@extends('./admin/layout/master')
@section('content')
  <main id="main" class="main">
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Payment list</h5>

          <!-- Table with stripped rows -->
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Payment Method</th>
                <th scope="col">Number</th>
                <th scope="col">Account No</th>
                <th scope="col">Brance Name</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Brandon Jacob</td>
                <td>Bkash</td>
                <td>05415</td>
                <td>224831574</td>
                <td>Khulna</td>
                <td>
                  <a href="payment_details.html" class="btn btn-info">view details</a>
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