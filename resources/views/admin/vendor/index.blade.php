@extends('./admin/layout/master')
@section('content')
      <main id="main" class="main">
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Vendor list</h5>

          <!-- Table with stripped rows -->
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Company Name</th>
                <th scope="col">Phone No</th>
                <th scope="col">Email</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @php $serial =0; @endphp
              @foreach($vendors as $vendor)
              @php $serial ++; @endphp
              <tr>
                <th scope="row">{{ $serial }}</th>
                <td>{{ $vendor->vendor_name}}</td>
                <td>{{ $vendor->company_name}}</td>
                <td>{{ $vendor->phone}}</td>
                <td>{{ $vendor->email }}</td>
                <td><img class="img-fluid" src="/admin/assets/img/pic.jpg" style="height: 44px; width: 45px;" alt=""></td>
                <td>
                  <a href="vendor_details.html" class="btn btn-info">view details</a>
                  <a href="#" class="btn btn-warning">Edit</a>
                  <a href="#" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>
  </main><!-- End #main -->
@endsection


  