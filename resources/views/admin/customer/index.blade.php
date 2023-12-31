@extends('./admin/layout/master')
@section('content')


    <main id="main" class="main">
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Customer List</h5>

          <!-- Table with stripped rows -->
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Mobile No</th>
                <th scope="col">Email</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @php $serial = 0; @endphp
              @foreach($customers as $customer)
                @php $serial ++; @endphp
                <tr>
                  <th scope="row">{{ $serial }}</th>
                  <td>{{ $customer->customer_name }}</td>
                  <td>{{$customer->mobile_no }}</td>
                  <td>{{ $customer->email }}</td>
                  <td><img class="img-fluid" src="/admin/assets/img/pic.jpg" style="height: 44px; width: 45px;" alt=""></td>
                  <td>
                    <a href="/admin-panel/customer/show/{{ $customer->id }}" class="btn btn-info"><i class="bi bi-view-stacked"></i></a>
                    <a href="/admin-panel/customer/edit/{{ $customer->id}}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                    {{ Form::open([
                      'url' => 'admin-panel/customer/destroy/'.$customer->id,
                      'method' => 'POST',
                      'enctype' => 'multipart/form-data',
                      'class' => 'form_horizontal_all'
                      ])
                     }}
                        <div class="rr" style="position: absolute; display:contents;">
                             <button type="submit" class="btn btn-danger"><i class="bi bi-trash3"></i></button>
                        </div>
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


