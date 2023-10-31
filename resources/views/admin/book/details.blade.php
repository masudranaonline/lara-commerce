@extends('./admin/layout/master')
@section('content')
    <main id="main" class="main">
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Product Details Page</h5>

          <!-- Table with stripped rows -->
          <table class="table table-striped">
                <table class="table table-bordered border-primary">
                    <div class="row">
                        <tbody>
                            <tr>
                                <td class="col-md-3">Category Id</td>
                                <td>{{ $book->category_id }}</td>
                            </tr>
                            <tr>
                                <tr>
                                    <td class="col-md-3">Author Id</td>
                                    <td>{{ $book->author_id }}</td>
                                </tr>
                                <tr>
                                    <tr>
                                        <td class="col-md-3">Publisher Id</td>
                                        <td>{{ $book->publisher_id }}</td>
                                    </tr>
                                    <tr>
                            <tr>
                                <td class="col-md-3">book name</td>
                                <td>{{ $book->name }}</td>
                            </tr>
                            <tr>
                                <td>Image</td>
                                <td><img src="/admin/assets/img/aosomapto.gif" class="rounded float-start img-fluid" alt="..."></td>
                            </tr>
                            <tr>
                                <td>Cost Price</td>
                                <td>{{ $book->cost_price }}</td>
                            </tr>
                            <tr>
                                <td>Sales Price</td>
                                <td>{{ $book->sales_price }}</td>
                            </tr>
                            <tr>
                                <td>Discount Price</td>
                                <td>{{ $book->discount_price }}</td>
                            </tr>
                            <tr>
                                <td>Rating</td>
                                <td>{{ $book->rating }}*</td>
                            </tr>
                            <tr>
                                <td>Quantity</td>
                                <td>{{ $book->quantity }}</td>
                            </tr>
                            <tr>
                                <td>Minimum Quantity</td>
                                <td>{{ $book->minimum_quantity }}</td>
                            </tr>
                            <tr>
                                <td>Pages</td>
                                <td>{{ $book->pages }}"</td>
                            </tr>
                            <tr>
                                <td>Edition</td>
                                <td>{{ $book->edition }}</td>
                            </tr>
                            <tr>
                                <td>Origin</td>
                                <td>{{ $book->origin }}</td>
                            </tr>
                            <tr>
                                <td>Language</td>
                                <td>{{ $book->language }}</td>
                            </tr>
                            <tr>
                                <td>is_ebook</td>
                                <td>{{ $book->is_ebook }}</td>
                            </tr>
                            <tr>
                                <td>pdf</td>
                                <td>{{ $book->pdf }}</td>
                            </tr>
                            <tr>
                                <td>book Details</td>
                                <td>{{ $book->description }}</tr>
                        </tbody>
                    </div>
                </table>
          </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>
  </main><!-- End #main -->
@endsection


