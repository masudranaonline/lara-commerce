@extends('./admin/layout/master')

@section('content')
    <main id="main" class="main">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Book Update Page</h5>


        {{ Form::open([
          'url' => '/admin-panel/book/update/'.$book->id,
          'method' => 'POST',
          'enctype' => 'multipart/form-data',
          ])
        }}

        <div class="row g-3">
            <div class="col-md-4">
                <label for="category_id" class="form-label">Category Id</label>
                <input type="number" class="form-control" name="category_id" id="category_id" value="{{ $book->category_id }}">
            </div>
            <div class="col-md-4">
                <label for="author_id" class="form-label">Author Id</label>
                <input type="number" class="form-control" name="author_id" id="author_id" value="{{ $book->author_id }}">
            </div>
            <div class="col-md-4">
                <label for="publisher_id" class="form-label">Publisher Id</label>
                <input type="number" class="form-control" name="publisher_id" id="publisher_id" value="{{ $book->publisher_id }}">
            </div>
            <div class="col-md-12">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $book->name }}">
            </div>


            <div class="row">
                <label for="image" class="col-sm-2 col-form-label">File Upload</label>
                <div class=" col-md-12">
                    <input class="form-control" type="file" name="image" id="image">
                </div>
            </div>

            <div class="col-md-4">
                <label for="cost_price" class="form-label">Cost Price</label>
                <input type="number" class="form-control" name="cost_price" id="cost_price" value="{{ $book->cost_price }}">
            </div>
            <div class="col-md-4">
                <label for="sales_price" class="form-label">Sales Price</label>
                <input type="number" class="form-control" name="sales_price" id="sales_price" value="{{ $book->sales_price }}">
            </div>
            <div class="col-md-4">
                <label for="discount_price" class="form-label">Discount Price</label>
                <input type="number" class="form-control" name="discount_price" id="discount_price" value="{{ $book->discount_price }}">
            </div>
            <div class="col-md-4">
                <label for="rating" class="form-label">Rating</label>
                <input type="number" class="form-control" name="rating" id="rating" value="{{ $book->rating }}">
            </div>
            <div class="col-md-4">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="number" class="form-control" name="quantity" id="quantity" value="{{ $book->quantity }}">
            </div>
            <div class="col-md-4">
                <label for="minimum_quantity" class="form-label">Minimum Quantity</label>
                <input type="number" class="form-control" name="minimum_quantity" id="minimum_quantity" value="{{ $book->minimum_quantity }}">
            </div>

            <div class="col-md-4">
                <label for="pages" class="form-label">Pages</label>
                <input type="text" class="form-control" name="pages" id="pages" value="{{ $book->pages }}">
            </div>
            <div class="col-md-4">
                <label for="edition" class="form-label">Edition</label>
                <input type="text" class="form-control" name="edition" id="edition" value="{{ $book->edition }}">
            </div>
            <div class="col-md-4">
                <label for="origin" class="form-label">Origin</label>
                <input type="text" class="form-control" name="origin" id="origin" value="{{ $book->origin }}">
            </div>

            <div class="col-md-6">
                <label for="language" class="form-label">Language</label>
                <input type="text" class="form-control" name="language" id="language" value="{{ $book->language }}">
            </div>
            <div class="col-md-6">
                <label for="is_ebook" class="form-label">is_ebook</label>
                <input type="number" class="form-control" id="is_ebook" name="is_ebook" value="{{ $book->is_ebook }}">
            </div>

            <div class="row">
                <label for="pdf" class="col-sm-2 col-form-label">PDF Upload</label>
                <div class=" col-md-12">
                    <input class="form-control" type="file" name="pdf" id="pdf">
                </div>
            </div>
            <div class="col-md-12">
                <label for="description" class="form-label">Product Details</label>
                <textarea class="form-control" rows="5" style="width: 100%;" name="description" id="description">
                   {{ $book->description }}
                </textarea>
            </div>

            <div class="text-center">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        {{ Form::close() }}
      </div>
    </div>
  </main><!-- End #main -->
@endsection


