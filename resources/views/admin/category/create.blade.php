@extends('./admin/layout/master')
@section('content')
  <main id="main" class="main">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Add Category</h5>


        {{ Form::open([
          'url' => '/admin-panel/category/store',
          'action' => 'POST',
          'enctype' => 'multipart/form-data',
          ])
        }}
         <div class="row g-3">
          <div class="col-md-12">
            <label for="category_name" class="form-label">Category Name</label>
            <input type="text" class="form-control" name="name" id="category_name">
          </div>

          <div class="row">
            <label for="image" class="col-sm-2 col-form-label">File Upload</label>
            <div class=" col-md-12">
              <input class="form-control" type="file" name="image" id="image">
            </div>
          </div>

            <div class="col-md-12">
            <label for="description" class="form-label">Product Details</label>
            <textarea class="form-control" rows="5" style="width: 100%;" name="description" id="description" "></textarea>
            </div>



          <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
        {{ Form::close() }}

      </div>
    </div>
  </main><!-- End #main -->

 @endsection
