@extends('frontend/layout/master')

@section('content')
    




    <!-- start checkout page section -->
    <div class="shipping pt-5">
        <div class="container">
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
                                    <label for="Name">Name:</label>
                                    <input class="name" type="text" placeholder="Enter your Name">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input class="phone mt-4" type="text" placeholder="Phone No">
                                        </div>
                                        <div class="col-md-6">
                                            <input class="alter_phone_no mt-4" type="text" placeholder="Alternative Phone No">
                                        </div>
                                        <div class="col-md-6">            
                                            <select class="cuntry mt-4" name="" id="">
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="India">India</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Canada">Canada</option>
                                                <option value="China">China</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Finland ">Finland </option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <select class="city mt-4" name="" id="">
                                                <option value="">Select City</option>
                                                <option value="">ঢাকা</option>
                                                <option value="">রাজশাহী</option>
                                                <option value="">কক্সবাজার</option>
                                                <option value="">খুলনা</option>
                                                <option value="">কিশোরগঞ্জ</option>
                                                <option value="">সিলেট</option>
                                                <option value="">রংপুর</option>
                                                <option value="">কুড়িঁগ্রাম</option>
                                                <option value="">কুমিল্লা</option>
                                                <option value="">কুষ্টিয়া</option>
                                                <option value="">খাগড়াছড়ি</option>
                                                <option value="">গাইবান্ধা </option>
                                                <option value="">গাজীপুর</option>
                                                <option value="">গোপালগঞ্জ </option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <select class="area mt-4" name="" id="">
                                                <option value="">Select Area</option>
                                                <option value="">কয়রা</option>
                                                <option value="">খান জাহান আলী</option>
                                                <option value="">খালিশপুর</option>
                                                <option value="">খুলনা  সদর </option>
                                                <option value="">ডুমুরিয়া</option>
                                                <option value="">তেরখাদা </option>
                                                <option value="">দাকোপ</option>
                                                <option value="">দিঘলিয়া </option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <select class="zone mt-4" name="" id="">
                                                <option value="">Select Zone</option>
                                                <option value="">আত্রা শিল্পা </option>
                                                <option value="">খুলনা পৌরসভা </option>
                                                <option value="">খুলনা বিশ্ববিদ্যালয়ের </option>
                                                <option value="">খুলনা শিপইয়ার্ড </option>
                                                <option value="">জাহানাবাদ সেনানিবাস </option>
                                                <option value="">দৌলতপুর পৌরসভা</option>
                                                <option value="">বিআইটি খুলনা </option>
                                                <option value="">শিরামনি </option>
                                                <option value="">সোনালী জুট মিলস </option>
                                            </select>
                                        </div>
                                    </div>
                                    <label class="mt-4" for="">Address</label>
                                    <textarea class=" msg" name="" id="" cols="30" rows="5" placeholder="বাসা/ফ্ল্যাট নম্বর, পাড়া-মহল্লার নাম, পরিচিতির এলাকা উল্লেখ করুন"></textarea>
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
                        <a href="#">Conform Order</a>
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
                                    <td>443 TK.</td>
                                </tr>
                                <tr class="total_tka">
                                    <td>Payable Total</td>
                                    <td>443 TK.</td>
                                </tr>
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


 @endsection