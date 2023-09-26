@extends('./admin/layout/master')
@section('content')
  <main id="main" class="main">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Add Payment Method</h5>

        <!-- Multi Columns Form -->
        <form class="row g-3">
          <div class="col-md-12">
            <label for="inputName5" class="form-label">Select Payment Method</label>
                <select id="inputState" class="form-select">
                    <option selected="">Choose...</option>
                    <option value="dhaka">Bkash</option>
                    <option value="khulna">Nagad</option>
                    <option value="khulna">Rocket</option>
                    <option value="khulna">Bank</option>
               </select>
          </div>
          <div class="col-md-12">
            <label for="inputName5" class="form-label">Payment Number</label>
            <input type="text" class="form-control" id="inputName5">
          </div>
          <div class="col-md-12">
            <label for="inputName5" class="form-label">Account Holder Name</label>
            <input type="text" class="form-control" id="inputName5">
          </div>
          <div class="col-md-12">
            <label for="inputName5" class="form-label">Account no</label>
            <input type="text" class="form-control" id="inputName5">
          </div>
          
          <div class="col-md-12">
            <label for="inputName5" class="form-label">Brance Name</label>
            <input type="text" class="form-control" id="inputName5">
          </div>
         

         

         
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form><!-- End Multi Columns Form -->

      </div>
    </div>
  </main><!-- End #main -->
 
  @endsection
 