@extends('./admin/layout/master')
@section('content')
      <main id="main" class="main">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Add Product</h5>

        <!-- Multi Columns Form -->
        <form class="row g-3">
          <div class="col-md-12">
            <label for="inputName5" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="inputName5">
          </div>
          <div class="col-md-12">
            <label for="inputName5" class="form-label">Product title</label>
            <input type="text" class="form-control" id="inputName5">
          </div>

          <div class="row">
            <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
            <div class=" col-md-12">
              <input class="form-control" type="file" id="formFile">
            </div>
          </div>

          <div class="col-md-4">
            <label for="inputName5" class="form-label">Cost Price</label>
            <input type="text" class="form-control" >
          </div>
          <div class="col-md-4">
            <label for="inputName5" class="form-label">Sales Price</label>
            <input type="text" class="form-control" >
          </div>
          <div class="col-md-4">
            <label for="inputName5" class="form-label">Discount Price</label>
            <input type="text" class="form-control" >
          </div>

          <div class="col-md-6">
            <label for="inputEmail5" class="form-label">Brand Name</label>
            <input type="text" class="form-control" id="inputEmail5">
          </div>
          <div class="col-md-6">
            <label for="inputPassword5" class="form-label">Rating</label>
            <input type="text" class="form-control" id="inputPassword5">
          </div>
          <div class="col-md-6">
          <label for="inputEmail5" class="form-label">Quantity</label>
            <input type="text" class="form-control" id="inputEmail5">
          </div>
          <div class="col-md-6">
            <label for="inputPassword5" class="form-label">Minimum Quantity</label>
            <input type="text" class="form-control" id="inputPassword5">
          </div>

          <div class="col-md-4">
            <label for="inputName5" class="form-label">Size</label>
            <input type="text" class="form-control" >
          </div>
          <div class="col-md-4">
            <label for="inputName5" class="form-label">Weight</label>
            <input type="text" class="form-control" >
          </div>
          <div class="col-md-4">
            <label for="inputName5" class="form-label">Material</label>
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
              <label for="inputEmail5" class="form-label">Shipping Cost</label>
                <input type="text" class="form-control" id="inputEmail5">
              </div>
              <div class="col-md-6">
                <label for="inputPassword5" class="form-label">Product Location</label>
                <input type="text" class="form-control" id="inputPassword5">
              </div>
              <div class="col-md-12">
                <label for="inputPassword5" class="form-label">Product Details</label>
                <textarea class="form-control" rows="5" style="width: 100%;" name="" id="" "></textarea>
              </div>


         
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form><!-- End Multi Columns Form -->

      </div>
    </div>
  </main><!-- End #main -->
@endsection


 