@extends('./admin/layout/master')
@section('content')
  <main id="main" class="main">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Category Update page</h5>

        <!-- Multi Columns Form -->
        {{ Form::open([
          'url' => '/admin-panel/category/update/'.$category->id,
          'method' => 'POST',
          'enctype' => 'multipart/form-data',
          ])
        }}
        <div class="row g-3">
          <div class="col-md-6">
            <label for="product_name" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="product_name" name="product_name" value="{{ $category->product_name }}">
          </div>
          <div class="col-md-6">
            <label for="category_name" class="form-label">Category Name</label>
            <input type="text" class="form-control" id="category_name" name="category_name" value="{{ $category->category_name }}">
          </div>

          <div class="row">
            <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
            <div class=" col-md-12">
              <input class="form-control" type="file" id="formFile">
            </div>
          </div>

          <div class="col-md-4">
            <label for="cost_price" class="form-label">Cost Price</label>
            <input type="text" class="form-control" id="cost_price" name="cost_price" value="{{ $category->cost_price }}">
          </div>
          <div class="col-md-4">
            <label for="sales_price" class="form-label">Sales Price</label>
            <input type="text" class="form-control" id="sales_price" name="sales_price" value="{{ $category->sales_price }}">
          </div>
          <div class="col-md-4">
            <label for="discount" class="form-label">Discount Price</label>
            <input type="text" class="form-control" id="discount" name="discount" value="{{ $category->discount }}">
          </div>

          <div class="col-md-6">
            <label for="brand_name" class="form-label">Brand Name</label>
            <input type="text" class="form-control" id="brand_name" name="brand_name" value="{{ $category->brand_name }}">
          </div>
          <div class="col-md-6">
          <label for="quantity" class="form-label">Quantity</label>
            <input type="text" class="form-control" id="quantity" name="quantity" value="{{ $category->quantity }}">
          </div>


          <div class="col-md-6">
            <label for="color_family" class="form-label">Color Family</label>
              <input type="text" class="form-control" id="color_family" name="color_family" value="{{ $category->color_family }}">
            </div>
            <div class="col-md-6">
              <label for="warranty" class="form-label">Warranty</label>
              <input type="text" class="form-control" id="warranty" name="warranty" value="{{ $category->warranty }}">
            </div>

            <div class="col-md-6">
              <label for="shipping_cost" class="form-label">Shipping Cost</label>
                <input type="text" class="form-control" id="shipping_cost" name="shipping_cost" value="{{ $category->shipping_cost }}">
              </div>
              <div class="col-md-6">
                <label for="product_location" class="form-label">Product Location</label>
                <input type="text" class="form-control" id="product_location" name="product_location" value="{{ $category->product_location }}">
              </div>
              <div class="col-md-12">
                <label for="inputPassword5" class="form-label">Product Details</label>
                <textarea class="form-control" rows="5" style="width: 100%;" name="description" id="description">
                  {{ $category->warranty }}
                </textarea>
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