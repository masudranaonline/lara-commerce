@extends('./admin/layout/master')
@section('content')
<main id="main" class="main">
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Refund list</h5>

          <!-- Table with stripped rows -->
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Refund No</th>
                <th scope="col">Product Name</th>
                <th scope="col">Customer Name</th>
                <th scope="col">Vendor Name</th>
                <th scope="col">Refunded</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @php $serial = 0; @endphp
              @foreach($refunds as $refund)
                @php $serial ++; @endphp
                <tr>
                  <th scope="row">{{ $serial }}</th>
                  <td>{{ $refund->refund_number }}</td>
                  <td>{{ $refund->product_name }}</td>
                  <td>{{ $refund->customer_name }}</td>
                  <td>{{ $refund->vendor_name }}</td>
                  <td>{{ $refund->refund_amount }}</td>
                  <td><img class="img-fluid" src="/admin/assets/img/aosomapto.gif" style="height: 44px; width: 45px;" alt=""></td>
                  <td>
                    <a href="/admin-panel/refund/show/{{ $refund->id }}" class="btn btn-info">view details</a>
                    <a href="/admin-panel/refund/edit/{{ $refund->id }}" class="btn btn-warning">Edit</a>
                    {{ Form::open([
                      'url' => '/admin-panel/refund/edit/'.$refund->id,
                      'method' => 'POST',
                      'enctype' => 'multipart/form-data',
                      ])
                    }}
                      <input type="submit" name="submit" value="Delete" class="btn btn-danger">
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
  

  