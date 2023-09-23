@extends('./admin/layout/master')
@section('content')
     <main id="main" class="main">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Vendor Update</h5>

        <!-- Multi Columns Form -->
        <form class="row g-3">
          <div class="col-md-12">
            <label for="inputName5" class="form-label">Vendor Name</label>
            <input type="text" class="form-control" id="inputName5">
          </div>
          <div class="col-md-12">
            <label for="inputName5" class="form-label">Company Name</label>
            <input type="text" class="form-control" id="inputName5">
          </div>
          <div class="col-md-6">
            <label for="inputName5" class="form-label">Phone No</label>
            <input type="text" class="form-control" id="inputName5">
          </div>
          <div class="col-md-6">
            <label for="inputName5" class="form-label">Email</label>
            <input type="text" class="form-control" id="inputName5">
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
        </form><!-- End Multi Columns Form -->

      </div>
    </div>
  </main><!-- End #main -->
@endsection
 

 