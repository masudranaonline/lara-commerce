@extends('frontend/layout/master')

@section('content')
    


        <!-- start cart section -->

        <div class="cart pt-4 pb-4">
            <div class="container">
                <div class="row">
                    <!-- <div class="col-md-2"></div> -->
                    <div class="col-md-8">
                        <div class="select_item product_bg shadow">
                            <div class="left_select_item">
                                <input type="checkbox">
                                <label for="">Select All (1 Item)</label>
                            </div>
                            <div class="total_tk">
                                <h5>your total: <span> 395 Tk</span></h5>
                            </div>
                        </div>
                        <div class="order_product_ditels mt-5 pb-5 product_bg shadow">
                            <div class="product_ditels ">
                                <div class="row">
                                <div class="col-md-6">
                                        <div class="checkbox">
                                            <input type="checkbox">
                                        </div>
                                        <div class="item_details">
                                            <img src="/frontend/asset/img/Civics_1st_papernews-Professor_Dr_Md_Mojammed_Haque-73be7-70437.jpg" alt="">
                                            <div class="sub_per_name">
                                                <h6>পৌরনীতি ও সুশাসন ১ম প্রত্র (একাদশ-দ্বাদশ)</h6>
                                                <p>প্রফেসর ড. মোঃ মোজাম্মেল হক</p>
                                                <a href="#"><i class="fa-solid fa-trash-can"></i></a>
                                            </div>
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="product_in_de">
                                        <button><i class="fa-solid fa-minus"></i></button>
                                        <input type="text" placeholder="1">
                                        <button><i class="fa-solid fa-plus"></i></button>
                                    </div>
                                    <div class="tka">
                                        <span>Tk. 395</span>
                                    </div>
                                </div>
                                
                                    
                                </div>
                        </div>
                        <div class="place_order pt-4">
                            <button type="button" class="btn btn-primary btn-lg">Order as a Gift</button>
                            <button type="button" class="btn btn-secondary btn-lg">Place Order</button>            
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="check_sidebar product_bg shadow">
                            <div class="sidebar_details">
                                <img src="/frontend/asset/img/cash-on.svg" alt="">
                                <span>Cash on Delivery Available</span>
                            </div>
                            <div class="sidebar_details">
                                <img src="/frontend/asset/img/cash-on.svg" alt="">
                                <span>7 Days Replacement Policy</span>
                            </div>
                            <div class="sidebar_details">
                                <img src="/frontend/asset/img/cash-on.svg" alt="">
                                <span>100% Money Back Guarantee</span>
                            </div>
                            <div class="sidebar_details">
                                <img src="/frontend/asset/img/cash-on.svg" alt="">
                                <span>Purchase & Earn Points</span>
                            </div>
                            <div class="sidebar_details">
                                <img src="/frontend/asset/img/cash-on.svg" alt="">
                                <span>100% Original Product</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection


