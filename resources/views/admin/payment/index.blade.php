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
                  <a href="/admin-panel/payment/show/{{ $payment->id }}" class="btn btn-info"><i class="bi bi-view-stacked"></i></a>
                  <a href="/admin-panel/payment/edit/{{ $payment->id}}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                  {{ Form::open([
                    'url' => '/admin-panel/payment/edit/destroy/'.$payment->id,
                    'method' => 'POST',
                    'enctype' => 'multipart/form-data',
                    'class' => 'form_horizontal_all'
                    ])
                  }}
                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash3"></i></button>
                  {{ Form::close()}}

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
