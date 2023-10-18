@extends('./admin/layout/master')
@section('content')

  <main id="main" class="main">
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Category list</h5>

          <!-- Table with stripped rows -->
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Category Name</th>
                <th scope="col">Brand Name</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @php $serial =0; @endphp
              @foreach($categories as $category)
              @php $serial ++; @endphp
              <tr>
                <th scope="row">{{ $serial }}</th>
                <td>{{ $category->product_name}}</td>
                <td>{{ $category->category_name}}</td>
                <td>{{ $category->brand_name }}</td>
                <td><img class="img-fluid" src="/admin/assets/img/aosomapto.gif" style="height: 44px; width: 45px;" alt=""></td>
                <td>
                  <a href="product_details.html" class="btn btn-info">view details</a>
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
  

 