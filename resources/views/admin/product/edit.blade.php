@extends('./admin/layout/master')

@section('content')
    <main id="main" class="main">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Product Update Page</h5>


        {{ Form::open([
          'url' => '/admin-panel/product/update/'.$product->id,
          'method' => 'POST',
          'enctype' => 'multipart/form-data',
          ])
        }}

          <div class="row g-3">
            <div class="col-md-12">
                <label for="category_id" class="form-label">Category Id</label>
                <input type="text" class="form-control" id="category_id" name="category_id" value="{{ $product->category_id }}">
              </div>
            <div class="col-md-12">
              <label for="name" class="form-label">Product Name</label>
              <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
            </div>
            <div class="row">
              <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
              <div class=" col-md-12">
                <input class="form-control" type="file" name="image" id="formFile">
              </div>
            </div>

            <div class="col-md-4">
              <label for="cost_price" class="form-label">Cost Price</label>
              <input type="text" class="form-control" name="cost_price" id="cost_price"  value="{{ $product->cost_price }}">
            </div>
            <div class="col-md-4">
              <label for="sales_price" class="form-label">Sales Price</label>
              <input type="text" class="form-control" id="sales_price" name="sales_price" value="{{ $product->sales_price }}" >
            </div>
            <div class="col-md-4">
              <label for="discount_price" class="form-label">Discount Price</label>
              <input type="text" class="form-control" id="discount_price" name="discount_price" value="{{ $product->discount_price }}">
            </div>

            <div class="col-md-6">
              <label for="brand" class="form-label">Brand Name</label>
              <input type="text" class="form-control" id="brand" name="brand" value="{{ $product->brand }}">
            </div>
            <div class="col-md-6">
              <label for="rating" class="form-label">Rating</label>
              <input type="text" class="form-control" id="rating" name="rating" value="{{ $product->rating }}">
            </div>
            <div class="col-md-6">
            <label for="quantity" class="form-label">Quantity</label>
              <input type="text" class="form-control" id="quantity" name="quantity" value="{{ $product->quantity }}">
            </div>
            <div class="col-md-6">
              <label for="minimum_quantity" class="form-label">Minimum Quantity</label>
              <input type="text" class="form-control" id="minimum_quantity" name="minimum_quantity" value="{{ $product->minimum_quantity }}">
            </div>

            <div class="col-md-4">
              <label for="sizes" class="form-label">Size</label>
              <input type="text" class="form-control" id="sizes" name="sizes" value="{{ $product->sizes }}">
            </div>
            <div class="col-md-4">
              <label for="weight" class="form-label">Weight</label>
              <input type="text" class="form-control" id="weight" name="weight" value="{{ $product->weight }}">
            </div>
            <div class="col-md-4">
              <label for="materials" class="form-label">Material</label>
              <input type="text" class="form-control" name="materials" name="materials" value="{{ $product->materials }}">
            </div>

            <div class="col-md-6">
              <label for="color" class="form-label">Color Family</label>
                <input type="text" class="form-control" id="color" name="color" value="{{ $product->color }}">
              </div>
              <div class="col-md-6">
                <label for="warranty" class="form-label">Warranty</label>
                <input type="text" class="form-control" id="warranty" name="warranty" value="{{ $product->warranty }}">
              </div>

              <div class="col-md-6">
                <label for="origin" class="form-label">Origin</label>
                  <input type="text" class="form-control" name="origin" id="origin" value="{{ $product->origin }}">
                </div>
                <div class="col-md-12">
                  <label for="description" class="form-label">Product Details</label>
                  <textarea class="form-control" rows="5" style="width: 100%;" name="description" id="description" >
                    {{ $product->description }}
                  </textarea>
                </div>

            <div class="text-center">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </div>

        {{ Form::close() }}
      </div>
    </div>
  </main><!-- End #main -->
@endsection


