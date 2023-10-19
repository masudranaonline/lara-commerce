@extends('./admin/layout/master')

@section('content')

    <main id="main" class="main">
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Customer Details Page</h5>

          <!-- Table with stripped rows -->
          <table class="table table-striped">
                <table class="table table-bordered border-primary">
                    <div class="row">
                        <tbody>
                            <tr>
                                <td class="col-md-3">Customer name</td>
                                <td>{{ $customer->customer_name}}</td>
                            </tr>
                            <tr>
                                <td>Customer Mobile No</td>
                                <td>{{ $customer->mobile_no}}</td>
                            </tr>
                            <tr>
                                <td>Image</td>
                                <td><img src="/admin/assets/img/pic.jpg" class="rounded float-start img-fluid" alt="..."></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $customer->email}}</td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>{{ $customer->password}}</td>
                            </tr>
                            
                            <tr>
                                <td>Mailing Country</td>
                                <td>{{ $customer->mailing_country}}</td>
                            </tr>
                            <tr>
                                <td>Mailing Divition</td>
                                <td>{{ $customer->mailing_division}}</td>
                            </tr>
                            <tr>
                                <td>Mailing District</td>
                                <td>{{ $customer->mailing_district}}</td>
                            </tr>
                            <tr>
                                <td>Mailing Sub District</td>
                                <td>{{ $customer->mailing_sub_district}}</td>
                            </tr>
                            <tr>
                                <td>Mailing Village</td>
                                <td>{{ $customer->mailing_village}}</td>
                            </tr>
                            <tr>
                                <td>Mailing Road No</td>
                                <td>{{ $customer->mailing_roadno}}</td>
                            </tr>
                            <tr>
                                <td>Mailing House No</td>
                                <td>{{ $customer->mailing_houseno}}</td>
                            </tr>
                            <tr>
                                <td>Mailing Zip code</td>
                                <td>{{ $customer->mailing_zip}}</td>
                            </tr>




                            <tr>
                                <td>Present Country</td>
                                <td>{{ $customer->present_country}}</td>
                            </tr>
                            <tr>
                                <td>Present Divition</td>
                                <td>{{ $customer->present_division}}</td>
                            </tr>
                            <tr>
                                <td>Present District</td>
                                <td>{{ $customer->present_district}}</td>
                            </tr>
                            <tr>
                                <td>Present Sub District</td>
                                <td>{{ $customer->present_sub_district}}</td>
                            </tr>
                            <tr>
                                <td>Present Village</td>
                                <td>{{ $customer->present_village}}</td>
                            </tr>
                            <tr>
                                <td>Present Road No</td>
                                <td>{{ $customer->present_roadno}}</td>
                            </tr>
                            <tr>
                                <td>Present House No</td>
                                <td>{{ $customer->present_houseno}}</td>
                            </tr>
                            <tr>
                                <td>Present Zip code</td>
                                <td>{{ $customer->present_zip}}</td>
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
  

  