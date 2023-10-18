@extends('./admin/layout/master')
@section('content')

<main id="main" class="main">
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Vendor Details Page</h5>

          <!-- Table with stripped rows -->
          <table class="table table-striped">
                <table class="table table-bordered border-primary">
                    <div class="row">
                        <tbody>
                            <tr>
                                <td class="col-md-3">Vendor name</td>
                                <td>{{ $vendor->vendor_name }}</td>
                            </tr>
                            <tr>
                                <td>Company Name</td>
                                <td>{{ $vendor->company_name }}</td>
                            </tr>
                            <tr>
                                <td>Phone no</td>
                                <td>{{ $vendor->phone }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $vendor->email }}</td>
                            </tr>
                            <tr>
                                <td>Image</td>
                                <td><img src="assets/img/pic.jpg" class="rounded float-start img-fluid" alt="..."></td>
                            </tr>
                           
                           
                           
                        </tbody>
                    </div>
                </table>
          </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>
  </main><!-- End #main -->