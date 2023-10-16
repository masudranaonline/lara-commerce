@extends('./admin/layout/master')
@section('content')
  <main id="main" class="main">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Add Payment Method</h5>

        <!-- Multi Columns Form -->
        {{ Form::open([
          'url' => 'admin-panel/payment/store',
          'method' => 'POST',
          'enctype' => 'multipart/form-data',
          ])
        }}
        <div class="row g-3">
          <div class="col-md-12">
            <label for="payment_method" class="form-label">Select Payment Method</label>
                <select id="payment_method" name="payment_method" class="form-select">
                    <option selected="">Choose...</option>
                    <option value="dhaka">Bkash</option>
                    <option value="khulna">Nagad</option>
                    <option value="khulna">Rocket</option>
                    <option value="khulna">Bank</option>
               </select>
          </div>
          <div class="col-md-12">
            <label for="payment_number" class="form-label">Payment Number</label>
            <input type="text" class="form-control" name="payment_number" id="payment_number">
          </div>
          <div class="col-md-12">
            <label for="account_holder_name" class="form-label">Account Holder Name</label>
            <input type="text" class="form-control" name="account_holder_name" id="account_holder_name">
          </div>
          <div class="col-md-12">
            <label for="account_no" class="form-label">Account no</label>
            <input type="text" class="form-control" name="account_no" id="account_no">
          </div>
          
          <div class="col-md-12">
            <label for="branch_name" class="form-label">Brance Name</label>
            <input type="text" class="form-control" name="branch_name" id="branch_name">
          </div>
         

         

         
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
        {{ Form::close()}}
      </div>
    </div>
  </main><!-- End #main -->
 
  @endsection
 