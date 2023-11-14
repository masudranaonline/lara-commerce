@extends('frontend/layout/master')

@section('content')





    <!-- start checkout page section -->
    <div class="shipping pt-5">
        <div class="container">
            {{ Form::open(['url' => '/checkout', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
            <div class="row">
                <div class="col-md-8">
                    <div class="shipping_address product_bg shadow">
                        <div class="heading">
                            <h5>Shipping Address <span>(Please Fill Out Your Information)</span></h5>
                        </div>
                        <div class="Address_ditels">
                            <div class="picup">
                                <p>Pick Up Your Parcel From:</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Home
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Office
                                    </label>
                                  </div>
                            </div>
                            <div class="form_address">
                                <form action="">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="Name" class="mt-4">Name:</label>
                                            <input class="name" name="customer_name" type="text" placeholder="Enter your Name">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="Name" class="mt-4">Phone No:</label>
                                            <input class="phone " name="mobile_no" type="text" placeholder="Phone No">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="Name" class="mt-4">Email:</label>
                                            <input class="name" name="email" type="text" placeholder="Enter Your Email">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="Name" class="mt-4">Country:</label>
                                            <select class="cuntry " name="country" id="country" onchange="getDivisionList()">
                                                @foreach($countries as $country)
                                                <option value="{{ $country['name'] }}">{{ $country['name'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="Name" class="mt-4">Division:</label>
                                            <select class="city " name="division" id="division" onchange="getDistrictList()">
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="Name"class="mt-4">District:</label>
                                            <select class="area " name="district" id="district" onchange="getUpazillaList()">
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="Name" class="mt-4">Upazilla:</label>
                                            <select class="zone " name="upazilla" id="upazilla" onchange="getUnionList()">

                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="Name" class="mt-4">Union:</label>
                                            <select class="zone " name="union" id="union">

                                            </select>
                                        </div>
                                    </div>
                                    <label class="mt-4" for="">Address</label>
                                    <textarea class=" msg" name="address" id="" cols="30" rows="5" placeholder="বাসা/ফ্ল্যাট নম্বর, পাড়া-মহল্লার নাম, পরিচিতির এলাকা উল্লেখ করুন"></textarea>
                                </form>
                            </div>

                        </div>
                    </div>

                    <p class="happy_return_big"><img class="img-fluid " src="/frontend/asset/img/happy-return-big.svg" alt=""> Happy Return <span> (7 days return facility)</span></p>

                    <div class="shipping_address product_bg shadow pb-2">
                        <div class="heading">
                            <h5>Payment Method<span>(Please select only one! payment method)</span></h5>
                        </div>


                       <div class="payment_method pt-4">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-check payment_item">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <div class="method_name">
                                        <img class="img-fluid" src="/frontend/asset/img/cod.png" alt=""><br>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Cash on delivery
                                        </label>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check payment_item">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <div class="method_name">
                                        <img class="img-fluid" src="/frontend/asset/img/cod.png" alt=""><br>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Cash on delivery
                                        </label>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check payment_item">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <div class="method_name">
                                        <img class="img-fluid" src="/frontend/asset/img/cod.png" alt=""><br>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Cash on delivery
                                        </label>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check payment_item">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <div class="method_name">
                                        <img class="img-fluid" src="/frontend/asset/img/cod.png" alt=""><br>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Cash on delivery
                                        </label>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check payment_item">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <div class="method_name">
                                        <img class="img-fluid" src="/frontend/asset/img/cod.png" alt=""><br>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Cash on delivery
                                        </label>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-md-6"></div>
                            <div class="col-md-6"></div>
                            <div class="col-md-6"></div>
                            <div class="col-md-6"></div>
                        </div>


                       <div class="rulse_ecommerce pt-5 ">
                        <p>গ্রাহকদের সর্বোচ্চ সেবা নিশ্চিত করতে রকমারিতে রয়েছে সুবিশাল ইনভেন্টরি। স্টকে না থাকা প্রোডাক্টগুলো সাপ্লায়ারের নিকট থেকে সংগ্রহ করতে হয় -</p>
                        <div class="rulse_ditels pb-4">
                            <span>1. আপনার অর্ডারের প্রোডাক্টগুলো সাপ্লায়ারের কাছে না থাকলে সেগুলো ব্যাতিত অবশিষ্ট প্রোডাক্টগুলো পাঠিয়ে দেয়া হবে। এসব ক্ষেত্রে আপনাকে ইমেইল/এসএমএস/হোয়াটসঅ্যাপ/ফোন এর মাধ্যমে জানিয়ে দেয়া হবে।</span><br>
                            <span>2. আপনার পেইড অর্ডারের প্রোডাক্ট NA হলে অথবা ক্যান্সেল হলে পেইড এমাউন্ট ৭-১০ কর্মদিবসের মাঝে রিফান্ড করা হবে ইনশাআল্লাহ।</span><br>
                            <span>3. সাপ্লায়ারের পক্ষ থেকে প্রোডাক্টের মূল্য পরিবর্তন হতে পারে। এসব ক্ষেত্রে আপনাকে ইমেইল/এসএমএস/হোয়াটসঅ্যাপ/ফোন এর মাধ্যমে জানিয়ে দেয়া হবে।</span>

                        </div>
                        <div class="form-check rulse_checkbox">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                এই শর্তগুলো মেনে অর্ডার প্রদান করছি।
                            </label>
                        </div>
                    </div>

                    <div class="order_btn">
                        <input type="submit" name="submit" class="btn btn-warning">
                    </div>
                    </div>

                </div>

            </div>
            <div class="col-md-4">
                <div class="checkout_summary product_bg shadow">
                    <div class="title pt-3 pb-2">
                        <h5 class="pb-3">Checkout Summary</h5>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Subtotal</td>
                                    <td>395 TK.</td>
                                </tr>
                                <tr>
                                    <td>Shipping (Changeable) </td>
                                    <td>48 TK</td>
                                </tr>
                                <tr>
                                    <td>Total </td>
                                    <td>{{ $total }} TK.</td>
                                    <input type="hidden" name="total_amount" value="{{ $total }}">
                                </tr>
                                {{-- <tr class="total_tka">
                                    <td>Payable Total</td>
                                    <td>443 TK.</td>
                                </tr> --}}
                            </tbody>

                        </table>
                        <div class="form-check rulse_checkbox" style="padding-left: 28px;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Gift Wrap for Tk. 20
                            </label>
                        </div>
                    </div>
                </div>

                <div class="voucher">
                    <h4>Add Promo code or voucher</h4>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Enter your Coupon code" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
                    </div>
                    <p class="text-center">You are saving 0%</p>
                </div>
            </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>


        <!-- start customer Care section -->

        <div class="customer mt-5 product_bg  pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <img class="onnorokom img-fluid" src="/frontend/asset/img/onnorokom_logo.png" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="services pt-4">
                            <div class="logo">
                                <img class="img-fluid" src="/frontend/asset/img/rok-icon-whatsapp.svg" alt="">
                            </div>
                            <div class="details">
                                <h5>Customer Care: <a href="#">01519521971</a><span>(Whatsapp Message Only)</span>or email to <a href="#">care@rokomari.com</a></h5>
                            </div>
                        </div>
                        <div class="services">
                            <div class="logo">
                                <img class="img-fluid" src="/frontend/asset/img/rok-icon-whatsapp.svg" alt="">
                            </div>
                            <div class="details">
                                <h5>E-mail: <a href="#">01519521971</a><span>(Whatsapp Message Only)</span>or email to <a href="#">care@rokomari.com</a></h5>
                            </div>
                        </div>
                        <div class="services">
                            <div class="logo">
                                <img class="img-fluid" src="/frontend/asset/img/rok-icon-whatsapp.svg" alt="">
                            </div>
                            <div class="details">
                                <h5>E-mail: <a href="#">01519521971</a><span>(Whatsapp Message Only)</span>or email to <a href="#">care@rokomari.com</a></h5>
                            </div>
                        </div>
                        <div class="services">
                            <div class="logo">
                                <img class="img-fluid" src="/frontend/asset/img/rok-icon-whatsapp.svg" alt="">
                            </div>
                            <div class="details">
                                <h5>E-mail: <a href="#">01519521971</a><span>(Whatsapp Message Only)</span>or email to <a href="#">care@rokomari.com</a></h5>
                            </div>
                        </div>
                        <div class="services">
                            <div class="logo">
                                <img class="img-fluid" src="/frontend/asset/img/rok-icon-whatsapp.svg" alt="">
                            </div>
                            <div class="details">
                                <h5>E-mail: <a href="#">01519521971</a><span>(Whatsapp Message Only)</span>or email to <a href="#">care@rokomari.com</a></h5>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>



        <div class="copyright pt-2 pb-2" style="text-align: center;">
            <p>© 2012-2023 Rokomari.com</p>
        </div>


        <script>
            function getDivisionList(){
                const country = document.getElementById('country').value

                fetch('http://localhost:8000/divisions/' + country)
                .then(res => res.json())
                .then(res => {
                    for(item of res){
                        document.getElementById('division').innerHTML += '<option value="'+item.id+'">'+item.name+'</option>'
                    }
                })
            }

            function getDistrictList(){
                const division = document.getElementById('division').value
                // console.log(division)
                fetch('http://localhost:8000/districts/' + division)

                .then(res => res.json())
                .then(res => {
                    document.getElementById('district').innerHTML = '';
                    for(const item in res){
                        document.getElementById('district').innerHTML += '<option value="'+res[item].name+'">'+res[item].name+'</option>'
                    };
                })
            }

            function getUpazillaList(){
                const district = document.getElementById('district').value

                fetch('http://localhost:8000/upazillas/' + district)
                .then(res => res.json())
                .then(res => {
                    document.getElementById('upazilla').innerHTML = '';
                    for(const item in res){
                        document.getElementById('upazilla').innerHTML += '<option value="'+res[item].name+'">'+res[item].name+'</option>'
                    };
                })
            }
            function getUnionList(){
                const upazilla = document.getElementById('upazilla').value

                fetch('http://localhost:8000/unions/' + upazilla)
                .then(res => res.json())
                .then(res => {
                    document.getElementById('union').innerHTML = '';
                    for(const item in res){
                        document.getElementById('union').innerHTML += '<option value="'+res[item].name+'">'+res[item].name+'</option>'
                    };
                })
            }


        </script>

 @endsection
