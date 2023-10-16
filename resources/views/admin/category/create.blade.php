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
          <div class="col-md-6">
            <label for="product_name" class="form-label">Product Name</label>
            <input type="text" class="form-control" name="product_name" id="product_name">
          </div>
          <div class="col-md-6">
            <label for="category_name" class="form-label">Category Name</label>
            <input type="text" class="form-control" name="category_name" id="category_name">
          </div>

          <div class="row">
            <label for="image" class="col-sm-2 col-form-label">File Upload</label>
            <div class=" col-md-12">
              <input class="form-control" type="file" name="image" id="image">
            </div>
          </div>

          <div class="col-md-4">
            <label for="cost_price" class="form-label">Cost Price</label>
            <input type="number" class="form-control" name="cost_price" id="cost_price" >
          </div>
          <div class="col-md-4">
            <label for="sales_price" class="form-label">Sales Price</label>
            <input type="number" class="form-control" name="sales_price" id="sales_price" >
          </div>
          <div class="col-md-4">
            <label for="discount" class="form-label">Discount Price</label>
            <input type="number" class="form-control" name="discount" id="discount" >
          </div>

          <div class="col-md-6">
            <label for="brand_name" class="form-label">Brand Name</label>
            <input type="text" class="form-control" name="brand_name" id="brand_name">
          </div>
          <div class="col-md-6">
          <label for="quantity" class="form-label">Quantity</label>
            <input type="number" class="form-control" name="quantity" id="quantity">
          </div>


          <div class="col-md-6">
            <label for="color_family" class="form-label">Color Family</label>
              <input type="text" class="form-control" name="color_family" id="color_family">
            </div>
            <div class="col-md-6">
              <label for="warranty" class="form-label">Warranty</label>
              <input type="text" class="form-control" name="warranty" id="warranty">
            </div>

            <div class="col-md-6">
              <label for="shipping_cost" class="form-label">Shipping Cost</label>
                <input type="text" class="form-control" name="shipping_cost" id="shipping_cost">
              </div>
              <div class="col-md-6">
                <label for="product_location" class="form-label">Product Location</label>
                <input type="text" class="form-control" name="product_location" id="product_location">
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