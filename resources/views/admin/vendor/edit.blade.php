@extends('./admin/layout/master')
@section('content')
     <main id="main" class="main">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Vendor Update</h5>

        <!-- Multi Columns Form -->
        {{ Form::open([
          'url' => '/admin-panel/vendor/update/'.$vendor->id,
          'method' => 'POST',
          'enctype' => 'multipart/form-data',
          ])
        }}
          <div class="row g-3">
            <div class="col-md-12">
              <label for="vendor_name" class="form-label">Vendor Name</label>
              <input type="text" class="form-control" id="vendor_name" name="vendor_name" value="{{ $vendor->vendor_name}}">
            </div>
            <div class="col-md-12">
              <label for="company_name" class="form-label">Company Name</label>
              <input type="text" class="form-control" id="company_name" name="company_name" value="{{ $vendor->company_name}}">
            </div>
            <div class="col-md-6">
              <label for="phone" class="form-label">Phone No</label>
              <input type="text" class="form-control" id="phone" name="phone" value="{{ $vendor->phone}}">
            </div>
            <div class="col-md-6">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control" id="email" name="email" value="{{ $vendor->email}}">
            </div>
            <div class="row">
              <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
              <div class=" col-md-12">
                <input class="form-control" type="file" id="formFile">
              </div>
            </div>
            
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </div><!-- End Multi Columns Form -->
        {{ Form::close() }}
      </div>
    </div>
  </main><!-- End #main -->
@endsection
 

 