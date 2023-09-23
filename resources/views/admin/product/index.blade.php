@extends('./admin/layout/master')

@section('content')
    <main id="main" class="main">
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Product list</h5>

          <!-- Table with stripped rows -->
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Sales Price</th>
                <th scope="col">Minimum</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Brandon Jacob</td>
                <td>Designer</td>
                <td>28</td>
                <td><img class="img-fluid" src="/admin/assets/img/aosomapto.gif" style="height: 44px; width: 45px;" alt=""></td>
                <td>
                  <a href="product_details.html" class="btn btn-info">view details</a>
                  <a href="#" class="btn btn-warning">Edit</a>
                  <a href="#" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Bridie Kessler</td>
                <td>Developer</td>
                <td>35</td>
                <td>2014-12-05</td>
                <td>Edit</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Ashleigh Langosh</td>
                <td>Finance</td>
                <td>45</td>
                <td>2011-08-12</td>
                <td>Edit</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Angus Grady</td>
                <td>HR</td>
                <td>34</td>
                <td>2012-06-11</td>
                <td>Edit</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>Raheem Lehner</td>
                <td>Dynamic Division Officer</td>
                <td>47</td>
                <td>2011-04-19</td>
                <td>Edit</td>
              </tr>
            </tbody>
          </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>
  </main><!-- End #main -->
@endsection
  
