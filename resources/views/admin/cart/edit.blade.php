@extends('./admin/layout/master')
@section('content')
  <main id="main" class="main">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Cart Update page</h5>

        <!-- Multi Columns Form -->
        <form class="row g-3">
          <div class="col-md-6">
            <label for="inputName5" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="inputName5">
          </div>
          <div class="col-md-6">
            <label for="inputName5" class="form-label">Quantity</label>
            <input type="text" class="form-control" id="inputName5">
          </div>
          <div class="col-md-12">
            <label for="inputName5" class="form-label">Cart Number</label>
            <input type="text" class="form-control" id="inputName5">
          </div>


          <div class="row">
            <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
            <div class=" col-md-12">
              <input class="form-control" type="file" id="formFile">
            </div>
          </div>


          
          <div class="col-md-4">
            <label for="inputName5" class="form-label">Sales Price</label>
            <input type="text" class="form-control" >
          </div>
      
          <div class="col-md-4">
            <label for="inputName5" class="form-label">Voucher No</label>
            <input type="text" class="form-control" >
          </div>
          <div class="col-md-4">
            <label for="inputName5" class="form-label">Total Amount</label>
            <input type="text" class="form-control" >
          </div>

          <div class="col-md-6">
            <label for="inputEmail5" class="form-label">Color Family</label>
              <input type="text" class="form-control" id="inputEmail5">
            </div>
            <div class="col-md-6">
              <label for="inputPassword5" class="form-label">Warranty</label>
              <input type="text" class="form-control" id="inputPassword5">
            </div>

          <div class="col-md-6">
            <label for="inputEmail5" class="form-label">Payment Method</label>
            <input type="text" class="form-control" id="inputEmail5">
          </div>
          <div class="col-md-6">
          <label for="inputEmail5" class="form-label">Shipping Cost</label>
            <input type="text" class="form-control" id="inputEmail5">
          </div>
         
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </form><!-- End Multi Columns Form -->

      </div>
    </div>
  </main><!-- End #main -->

  @endsection