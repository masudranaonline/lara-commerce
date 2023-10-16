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
                <th scope="col">Payment Method</th>
                <th scope="col">Number</th>
                <th scope="col">Account Holder Name</th>
                <th scope="col">Account No</th>
                <th scope="col">Brance Name</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @php $serial = 0; @endphp
              @foreach($payments as $payment)
                @php $serial ++; @endphp
              <tr>
                <th scope="row">{{ $serial }}</th>
                <td>{{ $payment->payment_method }}</td>
                <td>{{ $payment->payment_number }}</td>
                <td>{{ $payment->account_holder_name }}</td>
                <td>{{ $payment->account_no }}</td>
                <td>{{ $payment->branch_name}}</td>
                <td>
                  <a href="payment_details.html" class="btn btn-info">view details</a>
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