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
                            <label for="">Select All ({{ count($cartItems) }} Item)</label>
                        </div>
                        <div class="total_tk">
                            @php
                                $data = json_decode($cartItems, true);
                                $total = array_reduce($data, function($sum, $item){
                                    return $sum += $item['total'];
                                }, 0)
                            @endphp
                            <h5>your total: <span> {{  $total }} Tk</span></h5>
                        </div>
                    </div>
                    <div class="order_product_ditels mt-5 pb-5 product_bg shadow">
                        @foreach($cartItems as $item)
                        <div class="product_ditels ">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="checkbox">
                                        <input type="checkbox">
                                    </div>
                                    <div class="item_details">
                                        <img src="/admin/assets/productimage/{{ $item->product->image}}"
                                            alt="">
                                        <div class="sub_per_name">
                                            <h6>{{ $item->product->name }}</h6>
                                            <p>{{ $item->product->category->name }}</p>
                                            {{ Form::open(['url' => '/cart/destroy/'.$item->id, 'method' => 'POST']) }}
                                            <button class="btn btn-default" type="submit"><i class="fa-solid fa-trash-can text-danger"></i></button>
                                            {{ Form::close() }}
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="product_in_de">
                                        {{ Form::open(['url' => '/cart/decrease/'.$item->id, 'method' => 'POST']) }}
                                        <button type="submit"><i class="fa-solid fa-minus"></i></button>
                                        {{ Form::close() }}

                                        <input type="number" placeholder="1" value="{{ $item->quantity }}">

                                        {{ Form::open(['url' => '/cart/increase/'.$item->id, 'method' => 'POST']) }}
                                        <button type="submit"><i class="fa-solid fa-plus"></i></button>
                                        {{ Form::close() }}
                                    </div>
                                    <div class="tka">
                                        <span>Tk. {{ $item->total }}</span>
                                    </div>
                                </div>


                            </div>
                        </div>
                        @endforeach
                        <div class="place_order pt-4">
                            {{-- <button type="button" class="btn btn-primary btn-lg">Order as a Gift</button> --}}
                            <a href="/checkout" class="btn btn-secondary btn-lg">Place Order</a>
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
