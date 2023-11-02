@extends('./admin/layout/master')

@section('content')

    <main id="main" class="main">
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Product list</h5>

          <!-- Table with stripped rows -->
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Sales Price</th>
                <th scope="col">Minimum</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @php $serial = 0; @endphp
                @foreach ( $products as $product)
                @php $serial++ @endphp

              <tr>
                <th scope="row">{{ $serial }}</th>
                <td>{{ $product->name }}</td>
                <td>{{ $product->sales_price }}</td>
                <td>{{ $product->minimum_quantity  }}</td>
                <td><img class="img-fluid" src="/admin/assets/img/{{ $product->image}}" style="height: 44px; width: 45px;" alt=""></td>
                <td class="button-group">
                  <a href="/admin-panel/product/show/{{ $product->id }}" class="btn btn-info"><i class="bi bi-view-stacked"></i></a>
                  <a href="/admin-panel/product/edit/{{ $product->id }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>

                  {{ Form::open([
                    'url' => 'admin-panel/product/destroy/'.$product->id,
                    'method' => 'POST',
                    'class' => 'form_horizontal_all'
                    ])
                }}
                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash3"></i></button>
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

