@extends('frontend/layout/master')

@section('content')
    <!-- start wish list section -->

    <div class="wish_list m-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-8 product_bg shadow">


                    <div class="top p-4">
                        <h4>My Wishlist</h4>
                        <p>You have {{ count($wishItems) }} product(s) in your wishlist
                        </p>
                    </div>
                        @foreach ($wishItems as $wishItem)
                    <div class="main p-4">

                        <img src="/admin/assets/productimage/{{ $wishItem->product->image}}" alt="">
                        <div class="details">
                            <h3>{{ $wishItem->product->name}}</h3>
                            <p>{{ $wishItem->product->category->name}}</p>
                            <h6>Tk. {{ $wishItem->price}} <strike>Tk. 100</strike></h6>
                            <p class="rating">1 Ratings |</p>
                            {{ Form::open([
                                'url' => '/wishlist/addtocart/'.$wishItem->product->id,
                                'method' => 'POST',
                                'enctype' => 'multipart/form-data'
                            ])}}
                                <button type="submit" class=""><i class="fa-solid fa-cart-shopping"></i>Add to Cart</button>
                            {{ Form::close() }}

                        </div>
                        <div class="delete">
                            {{ Form::open([
                                'url' => '/wishlist/destroy/'.$wishItem->id,
                                'method' => 'POST',
                                'enctype' => 'multipart/form-data'
                            ])}}
                                <button type="submit" class="btn btn-default wishBtn"><i class="fa-solid fa-trash-can text-danger"></i></button>
                            {{ Form::close() }}
                        </div>

                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection


