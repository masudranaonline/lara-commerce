@extends('./admin/layout/master')

@section('content')
    <main id="main" class="main">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Update Customer</h5>

        <!-- Multi Columns Form -->
        <form class="row g-3">
            <div class="col-md-12">
                <label for="inputName5" class="form-label">Customer Name</label>
                <input type="text" class="form-control" id="inputName5">
            </div>
            <div class="col-md-12">
                <label for="inputName5" class="form-label">Mobile No</label>
                <input type="text" class="form-control" id="inputName5">
            </div>

            <div class="row">
                <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                <div class=" col-md-12">
                <input class="form-control" type="file" id="formFile">
                </div>
            </div>

            <div class="col-md-6">
                <label for="inputName5" class="form-label">Email</label>
                <input type="email" class="form-control" >
            </div>
            <div class="col-md-6">
                <label for="inputName5" class="form-label">Password</label>
                <input type="password" class="form-control" >
            </div>
            <h5 class="card-title text-center bg-info p-0">Mailing Address</h5>
            <div class="col-md-6">
                <label for="inputName5" class="form-label">Country</label>
                <select id="inputState" class="form-select">
                <option selected="">Choose...</option>
                <option>Bangladesh</option>
                <option value="india">India</option>
                <option value="unitedstates">United States</option>
                <option value="australia">Australia</option>
                <option value="canada">Canada</option>
                <option value="germany">Germany</option>
                <option value="argentina">Argentina</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="inputName5" class="form-label">Divition</label>
                <select id="inputState" class="form-select">
                <option selected="">Choose...</option>
                <option value="dhaka">Dhaka</option>
                <option value="khulna">Khulna</option>
                <option value="barishal">Barishal</option>
                <option value="chattogram">Chattogram</option>
                <option value="rajshasi">Rajshasi</option>
                <option value="rangpur">Rangpur</option>
                <option value="mymensingh">Mymensingh</option>
                <option value="sylhet">Sylhet</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="inputName5" class="form-label">District</label>
                <select id="inputState" class="form-select">
                <option selected="">Choose...</option>
                <option value="dhaka">Khulna</option>
                <option value="khulna">Satkhira</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="inputName5" class="form-label">Sub District</label>
                <select id="inputState" class="form-select">
                <option selected="">Choose...</option>
                <option value="dhaka">Khulna</option>
                <option value="khulna">Satkhira</option>
                </select>
            </div>

            <div class="col-md-4">
                <label for="inputEmail5" class="form-label">Village</label>
                <input type="text" class="form-control" id="inputEmail5">
            </div>
            <div class="col-md-3">
                <label for="inputPassword5" class="form-label">Road No</label>
                <input type="text" class="form-control" id="inputPassword5">
            </div>
            <div class="col-md-3">
            <label for="inputEmail5" class="form-label">House No</label>
                <input type="text" class="form-control" id="inputEmail5">
            </div>
            <div class="col-md-2">
                <label for="inputEmail5" class="form-label">Zip code</label>
                <input type="text" class="form-control" id="inputEmail5">
                </div>

                <h5 class="card-title text-center bg-info p-0">Present Address</h5>
            <div class="col-md-6">
                <label for="inputName5" class="form-label">Country</label>
                <select id="inputState" class="form-select">
                <option selected="">Choose...</option>
                <option>Bangladesh</option>
                <option value="india">India</option>
                <option value="unitedstates">United States</option>
                <option value="australia">Australia</option>
                <option value="canada">Canada</option>
                <option value="germany">Germany</option>
                <option value="argentina">Argentina</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="inputName5" class="form-label">Divition</label>
                <select id="inputState" class="form-select">
                <option selected="">Choose...</option>
                <option value="dhaka">Dhaka</option>
                <option value="khulna">Khulna</option>
                <option value="barishal">Barishal</option>
                <option value="chattogram">Chattogram</option>
                <option value="rajshasi">Rajshasi</option>
                <option value="rangpur">Rangpur</option>
                <option value="mymensingh">Mymensingh</option>
                <option value="sylhet">Sylhet</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="inputName5" class="form-label">District</label>
                <select id="inputState" class="form-select">
                <option selected="">Choose...</option>
                <option value="dhaka">Khulna</option>
                <option value="khulna">Satkhira</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="inputName5" class="form-label">Sub District</label>
                <select id="inputState" class="form-select">
                <option selected="">Choose...</option>
                <option value="dhaka">Khulna</option>
                <option value="khulna">Satkhira</option>
                </select>
            </div>

            <div class="col-md-4">
                <label for="inputEmail5" class="form-label">Village</label>
                <input type="text" class="form-control" id="inputEmail5">
            </div>
            <div class="col-md-3">
                <label for="inputPassword5" class="form-label">Road No</label>
                <input type="text" class="form-control" id="inputPassword5">
            </div>
            <div class="col-md-3">
            <label for="inputEmail5" class="form-label">House No</label>
                <input type="text" class="form-control" id="inputEmail5">
            </div>
            <div class="col-md-2">
                <label for="inputEmail5" class="form-label">Zip code</label>
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

  

  