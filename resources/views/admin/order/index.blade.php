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
              @php $serial = 0; @endphp
              @foreach($orders as $order)
                @php $serial ++; @endphp
                <tr>
                  <td scope="row">{{ $serial }}</td>
                  <td>{{ $order->order_number }}</td>
                  <td>{{ $order->product_name }}</td>
                  <td>{{ $order->quantity }}</td>
                  <td>{{ $order->total_amount }}</td>

                  <td><img class="img-fluid" src="/admin/assets/img/aosomapto.gif" style="height: 44px; width: 45px;" alt=""></td>
                  <td>0</td>
                  <td>
                    <a href="/admin-panel/order/show/{{ $order->id }}" class="btn btn-info">view details</a>
                    <a href="/admin-panel/order/edit/{{ $order->id }}" class="btn btn-warning">Edit</a>
                    {{ Form::open([
                        'url' => '/admin-panel/order/'.$order->id,
                        'method' => 'POST',
                        'enctype' => 'multipart/form-data',
                        ])
                    }}
                    <input type="submit" name="submit" value="Delete" class="btn btn-danger">
                    {{ Form::close() }}
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


