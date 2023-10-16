@extends('./admin/layout/master')
@section('content')
     <main id="main" class="main">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Add Vendor</h5>

           <!-- Multi Columns Form -->
          {{ Form::open([
            'url' => '/admin-panel/vendor/store',
            'method' => 'POST',
            'enctype' => 'multipart/form-data',
            ])
          }}
        
          <div class="row g-3">
            <div class="col-md-12">
              <label for="vendor_name" class="form-label">Vendor Name</label>
              <input type="text" class="form-control" name="vendor_name" id="vendor_name">
            </div>
            <div class="col-md-12">
              <label for="company_name" class="form-label">Company Name</label>
              <input type="text" class="form-control" name="company_name" id="company_name">
            </div>
            <div class="col-md-6">
              <label for="phone" class="form-label">Phone No</label>
              <input type="text" class="form-control" name="phone" id="phone">
            </div>
            <div class="col-md-6">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control" name="email" id="email">
            </div>
            <div class="row">
              <label for="image" class="col-sm-2 col-form-label">File Upload</label>
              <div class=" col-md-12">
                <input class="form-control" type="file" name="image" id="image">
              </div>
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
 

 