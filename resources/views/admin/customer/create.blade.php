@extends('./admin/layout/master')

@section('content')

    <main id="main" class="main">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Add Customer</h5>

            <!-- Multi Columns Form -->
            {{Form::open([
                'url' => 'admin-panel/customer/store',
                'method' => 'POST',
                'enctype' => 'multipart/form-data',
                ])
            }}
            <div class="row g-3">
                
                <div class="col-md-12">
                    <label for="customer_name" class="form-label">Customer Name</label>
                    <input type="text" class="form-control" name="customer_name" id="customer_name">
                </div>
                <div class="col-md-12">
                    <label for="mobile_no" class="form-label">Mobile No</label>
                    <input type="text" class="form-control" name="mobile_no" id="mobile_no">
                </div>
    
                <div class="row">
                    <label for="image" class="col-sm-2 col-form-label">File Upload</label>
                    <div class=" col-md-12">
                    <input class="form-control" type="file" name="image" id="image">
                    </div>
                </div>
    
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" >
                </div>
                <div class="col-md-6">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" >
                </div>
                <h5 class="card-title text-center bg-info p-0">Mailing Address</h5>
                <div class="col-md-6">
                    <label for="mailing_country" class="form-label">Country</label>
                    <select id="mailing_country" name="mailing_country" class="form-select" >
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
                    <label for="mailing_division" class="form-label">Divition</label>
                    <select id="mailing_division" name="mailing_division" class="form-select">
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
                    <label for="mailing_district" class="form-label">District</label>
                    <select id="mailing_district" name="mailing_district" class="form-select">
                        <option selected="">Choose...</option>
                        <option value="dhaka">Khulna</option>
                        <option value="khulna">Satkhira</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="mailing_sub_district" class="form-label">Sub District</label>
                    <select id="mailing_sub_district" name="mailing_sub_district" class="form-select">
                    <option selected="">Choose...</option>
                    <option value="dhaka">Khulna</option>
                    <option value="khulna">Satkhira</option>
                    </select>
                </div>
    
                <div class="col-md-4">
                    <label for="mailing_village" class="form-label">Village</label>
                    <input type="text" class="form-control" name="mailing_village" id="mailing_village">
                </div>
                <div class="col-md-3">
                    <label for="mailing_roadno" class="form-label">Road No</label>
                    <input type="text" class="form-control" name="mailing_roadno" id="mailing_roadno">
                </div>
                <div class="col-md-3">
                <label for="mailing_houseno" class="form-label">House No</label>
                    <input type="text" class="form-control" name="mailing_houseno" id="mailing_houseno">
                </div>
                <div class="col-md-2">
                    <label for="mailing_zip" class="form-label">Zip code</label>
                    <input type="text" class="form-control" name="mailing_zip" id="mailing_zip">
                    </div>
    
                    <h5 class="card-title text-center bg-info p-0">Present Address</h5>
                <div class="col-md-6">
                    <label for="present_country" class="form-label">Country</label>
                    <select id="present_country" name="present_country" class="form-select">
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
                    <select id="present_division" name="present_division" class="form-select">
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
                    <select id="present_district" name="present_district" class="form-select">
                        <option selected="">Choose...</option>
                        <option value="dhaka">Khulna</option>
                        <option value="khulna">Satkhira</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="present_sub_district" class="form-label">Sub District</label>
                    <select id="present_sub_district" name="present_sub_district" class="form-select">
                        <option selected="">Choose...</option>
                        <option value="dhaka">Khulna</option>
                        <option value="khulna">Satkhira</option>
                    </select>
                </div>
    
                <div class="col-md-4">
                    <label for="present_village" class="form-label">Village</label>
                    <input type="text" class="form-control" name="present_village" id="present_village">
                </div>
                <div class="col-md-3">
                    <label for="present_roadno" class="form-label">Road No</label>
                    <input type="text" class="form-control" name="present_roadno" id="present_roadno">
                </div>
                <div class="col-md-3">
                <label for="present_houseno" class="form-label">House No</label>
                    <input type="text" class="form-control" name="present_houseno" id="present_houseno">
                </div>
                <div class="col-md-2">
                    <label for="present_zip" class="form-label">Zip code</label>
                    <input type="text" class="form-control" name="present_zip" id="present_zip">
                    </div>
                
    
                
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>  
            </div><!-- End Multi Columns Form -->
        {{ Form::close() }}
        </div>
        </div>
  </main><!-- End #main -->
@endsection
  

 