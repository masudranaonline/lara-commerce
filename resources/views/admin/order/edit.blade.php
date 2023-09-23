@extends('./admin/layout/master')
@section('content')
     <main id="main" class="main">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Order Update Page</h5>

        <!-- Multi Columns Form -->
        <form class="row g-3">
          <div class="col-md-12">
            <label for="inputName5" class="form-label">Order Number</label>
            <input type="text" class="form-control" id="inputName5">
          </div>
          <div class="col-md-12">
            <label for="inputName5" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="inputName5">
          </div>
          <div class="col-md-4">
            <label for="inputName5" class="form-label">Quantity</label>
            <input type="text" class="form-control" id="inputName5">
          </div>
          <div class="col-md-4">
            <label for="inputName5" class="form-label">Tax</label>
            <input type="text" class="form-control" id="inputName5">
          </div>
          <div class="col-md-4">
            <label for="inputName5" class="form-label">Price</label>
            <input type="text" class="form-control" id="inputName5">
          </div>

          <div class="row">
            <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
            <div class=" col-md-12">
              <input class="form-control" type="file" id="formFile">
            </div>
          </div>

          <div class="col-md-6">
            <label for="inputName5" class="form-label">Order Date</label>
            <input type="text" class="form-control" >
          </div>
          <div class="col-md-6">
            <label for="inputName5" class="form-label">Delivery Date</label>
            <input type="text" class="form-control" >
          </div>
          <div class="col-md-13">
            <label for="inputName5" class="form-label">Payment Method</label>
            <input type="text" class="form-control" >
          </div>

          <div class="col-md-12">
            <label for="inputEmail5" class="form-label">Customer Name</label>
            <input type="text" class="form-control" id="inputEmail5">
          </div>
          <div class="col-md-6">
            <label for="inputPassword5" class="form-label">Mobile No</label>
            <input type="text" class="form-control" id="inputPassword5">
          </div>
          <div class="col-md-6">
          <label for="inputEmail5" class="form-label">Email</label>
            <input type="text" class="form-control" id="inputEmail5">
          </div>

          <div class="col-md-4">
            <label for="inputName5" class="form-label">House NO</label>
            <input type="text" class="form-control" >
          </div>
          <div class="col-md-4">
            <label for="inputName5" class="form-label">Road No</label>
            <input type="text" class="form-control" >
          </div>
          <div class="col-md-4">
            <label for="inputName5" class="form-label">Village</label>
            <input type="text" class="form-control" >
          </div>

          <div class="col-md-6">
            <label for="inputEmail5" class="form-label">Sub district</label>
              <input type="text" class="form-control" id="inputEmail5">
            </div>
            <div class="col-md-6">
              <label for="inputPassword5" class="form-label">District</label>
              <input type="text" class="form-control" id="inputPassword5">
            </div>

            <div class="col-md-6">
              <label for="inputEmail5" class="form-label">Divition</label>
                <input type="text" class="form-control" id="inputEmail5">
              </div>
              <div class="col-md-6">
                <label for="inputPassword5" class="form-label">Country</label>
                <input type="text" class="form-control" id="inputPassword5">
              </div>
              <div class="col-md-12">
                <label for="inputPassword5" class="form-label">Product Details</label>
                <textarea class="form-control" rows="5" style="width: 100%;" name="" id="" "></textarea>
              </div>


         
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </form><!-- End Multi Columns Form -->

      </div>
    </div>
  </main><!-- End #main -->
@endsection
 

  