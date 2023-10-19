@extends('./admin/layout/master')

@section('content')
    <main id="main" class="main">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Update Customer</h5>

        <!-- Multi Columns Form -->
        {{ Form::open([
            'url' => '/admin-panel/customer/update/'.$customer->id,
            'method' => 'POST',
            'enctype' => 'multipart/form-data',
            ])
        }}
            <div class="row g-3">
                <div class="col-md-12">
                    <label for="customer_name" class="form-label">Customer Name</label>
                    <input type="text" class="form-control" id="customer_name" name="customer_name" value="{{ $customer->customer_name}}">
                </div>
                <div class="col-md-12">
                    <label for="mobile_no" class="form-label">Mobile No</label>
                    <input type="text" class="form-control" id="mobile_no" name="mobile_no" value="{{ $customer->mobile_no}}">
                </div>

                <div class="row">
                    <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                    <div class=" col-md-12">
                    <input class="form-control" type="file" id="formFile">
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $customer->email}}">
                </div>
                <div class="col-md-6">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" value="{{ $customer->password}}">
                </div>
                <h5 class="card-title text-center bg-info p-0">Mailing Address</h5>
                <div class="col-md-6">
                    <label for="mailing_country" class="form-label">Country</label>
                    <select id="inputState" class="form-select" name="mailing_country" id="mailing_country" value="{{ $customer->mailing_country}}">
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
                    <select id="inputState" class="form-select" name="mailing_division" id="mailing_division" value="{{ $customer->mailing_division}}">
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
                    <select id="inputState" class="form-select" name="mailing_district" id="mailing_district" value="{{ $customer->mailing_district}}">
                    <option selected="">Choose...</option>
                    <option value="dhaka">Khulna</option>
                    <option value="khulna">Satkhira</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputName5" class="form-label">Sub District</label>
                    <select id="inputState" class="form-select" name="mailing_sub_district" id="mailing_sub_district" value="{{ $customer->mailing_sub_district}}">
                    <option selected="">Choose...</option>
                    <option value="dhaka">Khulna</option>
                    <option value="khulna">Satkhira</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label for="mailing_village" class="form-label">Village</label>
                    <input type="text" class="form-control" id="mailing_village" name="mailing_village" value="{{ $customer->mailing_village}}">
                </div>
                <div class="col-md-3">
                    <label for="inputPassword5" class="form-label">Road No</label>
                    <input type="text" class="form-control" id="mailing_roadno" name="mailing_roadno" value="{{ $customer->mailing_roadno}}"> 
                </div>
                <div class="col-md-3">
                <label for="mailing_houseno" class="form-label">House No</label>
                    <input type="text" class="form-control" id="mailing_houseno" name="mailing_houseno" value="{{ $customer->mailing_houseno}}">
                </div>
                <div class="col-md-2">
                    <label for="mailing_zip" class="form-label">Zip code</label>
                    <input type="text" class="form-control" id="mailing_zip" name="mailing_zip" value="{{ $customer->mailing_zip}}">
                    </div>

                    <h5 class="card-title text-center bg-info p-0">Present Address</h5>
                <div class="col-md-6">
                    <label for="present_country" class="form-label">Country</label>
                    <select id="inputState" class="form-select" name="present_country" id="present_country" value="{{ $customer->present_country}}">
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
                    <label for="present_division" class="form-label">Divition</label>
                    <select id="inputState" class="form-select" name="present_division" id="present_division" value="{{ $customer->present_division}}">
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
                    <label for="present_district" class="form-label">District</label>
                    <select id="inputState" class="form-select" name="present_district" id="present_district" value="{{ $customer->present_district}}">
                    <option selected="">Choose...</option>
                    <option value="dhaka">Khulna</option>
                    <option value="khulna">Satkhira</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="present_sub_district" class="form-label">Sub District</label>
                    <select id="inputState" class="form-select" name="present_sub_district" id="present_sub_district" value="{{ $customer->present_sub_district}}">
                    <option selected="">Choose...</option>
                    <option value="dhaka">Khulna</option>
                    <option value="khulna">Satkhira</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label for="present_village" class="form-label">Village</label>
                    <input type="text" class="form-control" id="present_village" name="present_village" value="{{ $customer->present_village}}">
                </div>
                <div class="col-md-3">
                    <label for="present_roadno" class="form-label">Road No</label>
                    <input type="text" class="form-control" id="present_roadno" name="present_roadno" value="{{ $customer->present_roadno}}">
                </div>
                <div class="col-md-3">
                <label for="present_houseno" class="form-label">House No</label>
                    <input type="text" class="form-control" id="present_houseno" name="present_houseno" value="{{ $customer->present_houseno}}">
                </div>
                <div class="col-md-2">
                    <label for="present_zip" class="form-label">Zip code</label>
                    <input type="text" class="form-control" id="present_zip" name="present_zip" value="{{ $customer->present_zip}}">
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

  

  