@extends('./admin/layout/master')

@section('content')
    {{-- <style>
        .button-group{
            display: flex;
        }
    </style> --}}
    <main id="main" class="main">
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Book list</h5>

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
                @foreach ($books as $book)
                @php $serial++ @endphp

              <tr>
                <th scope="row">{{ $serial }}</th>
                <td>{{ $book->name }}</td>
                <td>{{ $book->sales_price }}</td>
                <td>{{ $book->minimum_quantity  }}</td>
                <td><img class="img-fluid" src="/admin/assets/img/aosomapto.gif" style="height: 44px; width: 45px;" alt=""></td>
                <td class="button-group">
                  <a href="/admin-panel/book/show/{{ $book->id }}" class="btn btn-info"><i class="bi bi-view-stacked"></i></a>
                  <a href="/admin-panel/book/edit/{{ $book->id }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>

                  {{ Form::open([
                    'url' => 'admin-panel/book/destroy/'.$book->id,
                    'method' => 'POST',
                    'enctype' => 'multipart/form-data',
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

