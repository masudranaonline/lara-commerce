@extends('frontend/layout/master')

@section('content')
    
    <!-- start specific_list_page section -->

        <div class="specific_list_page pt-5 mt-8">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="product_list_sidebar product_bg shadow">
                            <!-- <div class="list_title "> -->
                                <div class="sort">
                                    <p>Sort</p>
                                    <a href="#">Reset Sort</a>
                                </div>
                            <!-- </div> -->
                            <div class="list_side_menubar">
                                <ul>
                                    <li><input type="radio"><a href="#">Best Seller</a></li>
                                    <li><input type="radio"><a href="#">New Released</a></li>
                                    <li><input type="radio"><a href="#">Price - Low to High</a></li>
                                    <li><input type="radio"><a href="#">Price - High to Low</a></li>
                                    <li><input type="radio"><a href="#">Discount - Low to High</a></li>
                                    <li><input type="radio"><a href="#">Discount - High to Low</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="in_stock product_bg shadow mb-4">
                            <div class="list_side_menubar mt-5">
                                <ul>
                                    <li class="in_stock_padding"><input type="radio"><a href="#">In Stock</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="product_list_sidebar product_bg shadow">
                            <!-- <div class="list_title "> -->
                                <div class="sort">
                                    <p>Filter</p>
                                    <a href="#">Reset Filter</a>
                                </div>
                            <!-- </div> -->
                            <div class="list_side_menubar">
                                <ul>
                                    <li><input type="checkbox"><a href="#">OnnoRokom BigganBaksho</a></li>
                                    <li><input type="checkbox"><a href="#">EMCO</a></li>
                                    <li><input type="checkbox"><a href="#">Funskool</a></li>
                                    <li><input type="checkbox"><a href="#">রকমারি কালেকশন</a></li>
                                    <li><input type="checkbox"><a href="#">Jainco</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="product_list_sidebar product_bg shadow mt-3 mb-4">
                            <!-- <div class="list_title "> -->
                                <div class="sort">
                                    <p>Age</p>
                                    <a href="#">Reset Age</a>
                                </div>
                            <!-- </div> -->
                            <div class="list_side_menubar">
                                <ul>
                                    <li><input type="radio"><a href="#">7 Years+</a></li>
                                    <li><input type="radio"><a href="#">8 Years+</a></li>
                                    <li><input type="radio"><a href="#">4 Years+</a></li>
                                    <li><input type="radio"><a href="#">9 Years +</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 product_bg shadow pt-4 pb-4">
                        <div class="title_product_list pt-3 pb-4">
                            <span><a href="#">Electronics</a>>Science Kit</span>
                            <h6>Science Kit</h6>
                            <p>(Showing 1 to 36 of 36 products)</p>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-3 pb-5">
                                <div class="list_page_ditels text-center">
                                    <img class="img-fluid" src="/frontend/asset/img/Alor_Jholok-OnnoRokom_BigganBaksho-43e7b-109603.png" alt="">
                                        <h6>আলোর ঝলক</h6>
                                        <p>OnnoRokom BigganBaksho</p>
                                        <div class="rating-section text-center rating_color"> 
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="text-secondary">(33)</span> 
                                        </div>
                                        <p class="book_authore">product in stock</p>
                                        <span class="discount-price">৳1240</span>
                                        <div class="add_card_overlay1">
                                            <a href="#">Add to Cart</a>
                                        </div>
                                        <div class="view_pro_overlay1">
                                            <a class="add_no_1" href="#">Add to Cart</a>
                                            <a class="view_no_1" href="#">View Details</a>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 pb-5">
                                <div class="list_page_ditels text-center">
                                    <img class="img-fluid" src="/frontend/asset/img/Alor_Jholok-OnnoRokom_BigganBaksho-43e7b-109603.png" alt="">
                                        <h6>আলোর ঝলক</h6>
                                        <p>OnnoRokom BigganBaksho</p>
                                        <div class="rating-section text-center rating_color"> 
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="text-secondary">(33)</span> 
                                        </div>
                                        <p class="book_authore">product in stock</p>
                                        <span class="discount-price">৳1240</span>
                                        <div class="add_card_overlay1">
                                            <a href="#">Add to Cart</a>
                                        </div>
                                        <div class="view_pro_overlay1">
                                            <a class="add_no_1" href="#">Add to Cart</a>
                                            <a class="view_no_1" href="#">View Details</a>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 pb-5">
                                <div class="list_page_ditels text-center">
                                    <img class="img-fluid" src="/frontend/asset/img/Alor_Jholok-OnnoRokom_BigganBaksho-43e7b-109603.png" alt="">
                                        <h6>আলোর ঝলক</h6>
                                        <p>OnnoRokom BigganBaksho</p>
                                        <div class="rating-section text-center rating_color"> 
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="text-secondary">(33)</span> 
                                        </div>
                                        <p class="book_authore">product in stock</p>
                                        <span class="discount-price">৳1240</span>
                                        <div class="add_card_overlay1">
                                            <a href="#">Add to Cart</a>
                                        </div>
                                        <div class="view_pro_overlay1">
                                            <a class="add_no_1" href="#">Add to Cart</a>
                                            <a class="view_no_1" href="#">View Details</a>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 pb-5">
                                <div class="list_page_ditels text-center">
                                    <img class="img-fluid" src="/frontend/asset/img/Alor_Jholok-OnnoRokom_BigganBaksho-43e7b-109603.png" alt="">
                                        <h6>আলোর ঝলক</h6>
                                        <p>OnnoRokom BigganBaksho</p>
                                        <div class="rating-section text-center rating_color"> 
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="text-secondary">(33)</span> 
                                        </div>
                                        <p class="book_authore">product in stock</p>
                                        <span class="discount-price">৳1240</span>
                                        <div class="add_card_overlay1">
                                            <a href="#">Add to Cart</a>
                                        </div>
                                        <div class="view_pro_overlay1">
                                            <a class="add_no_1" href="#">Add to Cart</a>
                                            <a class="view_no_1" href="#">View Details</a>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 pb-5">
                                <div class="list_page_ditels text-center">
                                    <img class="img-fluid" src="/frontend/asset/img/Alor_Jholok-OnnoRokom_BigganBaksho-43e7b-109603.png" alt="">
                                        <h6>আলোর ঝলক</h6>
                                        <p>OnnoRokom BigganBaksho</p>
                                        <div class="rating-section text-center rating_color"> 
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="text-secondary">(33)</span> 
                                        </div>
                                        <p class="book_authore">product in stock</p>
                                        <span class="discount-price">৳1240</span>
                                        <div class="add_card_overlay1">
                                            <a href="#">Add to Cart</a>
                                        </div>
                                        <div class="view_pro_overlay1">
                                            <a class="add_no_1" href="#">Add to Cart</a>
                                            <a class="view_no_1" href="#">View Details</a>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 pb-5">
                                <div class="list_page_ditels text-center">
                                    <img class="img-fluid" src="/frontend/asset/img/Alor_Jholok-OnnoRokom_BigganBaksho-43e7b-109603.png" alt="">
                                        <h6>আলোর ঝলক</h6>
                                        <p>OnnoRokom BigganBaksho</p>
                                        <div class="rating-section text-center rating_color"> 
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="text-secondary">(33)</span> 
                                        </div>
                                        <p class="book_authore">product in stock</p>
                                        <span class="discount-price">৳1240</span>
                                        <div class="add_card_overlay1">
                                            <a href="#">Add to Cart</a>
                                        </div>
                                        <div class="view_pro_overlay1">
                                            <a class="add_no_1" href="#">Add to Cart</a>
                                            <a class="view_no_1" href="#">View Details</a>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 pb-5">
                                <div class="list_page_ditels text-center">
                                    <img class="img-fluid" src="/frontend/asset/img/Alor_Jholok-OnnoRokom_BigganBaksho-43e7b-109603.png" alt="">
                                        <h6>আলোর ঝলক</h6>
                                        <p>OnnoRokom BigganBaksho</p>
                                        <div class="rating-section text-center rating_color"> 
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="text-secondary">(33)</span> 
                                        </div>
                                        <p class="book_authore">product in stock</p>
                                        <span class="discount-price">৳1240</span>
                                        <div class="add_card_overlay1">
                                            <a href="#">Add to Cart</a>
                                        </div>
                                        <div class="view_pro_overlay1">
                                            <a class="add_no_1" href="#">Add to Cart</a>
                                            <a class="view_no_1" href="#">View Details</a>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 pb-5">
                                <div class="list_page_ditels text-center">
                                    <img class="img-fluid" src="/frontend/asset/img/Alor_Jholok-OnnoRokom_BigganBaksho-43e7b-109603.png" alt="">
                                        <h6>আলোর ঝলক</h6>
                                        <p>OnnoRokom BigganBaksho</p>
                                        <div class="rating-section text-center rating_color"> 
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="text-secondary">(33)</span> 
                                        </div>
                                        <p class="book_authore">product in stock</p>
                                        <span class="discount-price">৳1240</span>
                                        <div class="add_card_overlay1">
                                            <a href="#">Add to Cart</a>
                                        </div>
                                        <div class="view_pro_overlay1">
                                            <a class="add_no_1" href="#">Add to Cart</a>
                                            <a class="view_no_1" href="#">View Details</a>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 pb-5">
                                <div class="list_page_ditels text-center">
                                    <img class="img-fluid" src="/frontend/asset/img/Alor_Jholok-OnnoRokom_BigganBaksho-43e7b-109603.png" alt="">
                                        <h6>আলোর ঝলক</h6>
                                        <p>OnnoRokom BigganBaksho</p>
                                        <div class="rating-section text-center rating_color"> 
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="text-secondary">(33)</span> 
                                        </div>
                                        <p class="book_authore">product in stock</p>
                                        <span class="discount-price">৳1240</span>
                                        <div class="add_card_overlay1">
                                            <a href="#">Add to Cart</a>
                                        </div>
                                        <div class="view_pro_overlay1">
                                            <a class="add_no_1" href="#">Add to Cart</a>
                                            <a class="view_no_1" href="#">View Details</a>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 pb-5">
                                <div class="list_page_ditels text-center">
                                    <img class="img-fluid" src="/frontend/asset/img/Alor_Jholok-OnnoRokom_BigganBaksho-43e7b-109603.png" alt="">
                                        <h6>আলোর ঝলক</h6>
                                        <p>OnnoRokom BigganBaksho</p>
                                        <div class="rating-section text-center rating_color"> 
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="text-secondary">(33)</span> 
                                        </div>
                                        <p class="book_authore">product in stock</p>
                                        <span class="discount-price">৳1240</span>
                                        <div class="add_card_overlay1">
                                            <a href="#">Add to Cart</a>
                                        </div>
                                        <div class="view_pro_overlay1">
                                            <a class="add_no_1" href="#">Add to Cart</a>
                                            <a class="view_no_1" href="#">View Details</a>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 pb-5">
                                <div class="list_page_ditels text-center">
                                    <img class="img-fluid" src="/frontend/asset/img/Alor_Jholok-OnnoRokom_BigganBaksho-43e7b-109603.png" alt="">
                                        <h6>আলোর ঝলক</h6>
                                        <p>OnnoRokom BigganBaksho</p>
                                        <div class="rating-section text-center rating_color"> 
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="text-secondary">(33)</span> 
                                        </div>
                                        <p class="book_authore">product in stock</p>
                                        <span class="discount-price">৳1240</span>
                                        <div class="add_card_overlay1">
                                            <a href="#">Add to Cart</a>
                                        </div>
                                        <div class="view_pro_overlay1">
                                            <a class="add_no_1" href="#">Add to Cart</a>
                                            <a class="view_no_1" href="#">View Details</a>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 pb-5">
                                <div class="list_page_ditels text-center">
                                    <img class="img-fluid" src="/frontend/asset/img/Alor_Jholok-OnnoRokom_BigganBaksho-43e7b-109603.png" alt="">
                                        <h6>আলোর ঝলক</h6>
                                        <p>OnnoRokom BigganBaksho</p>
                                        <div class="rating-section text-center rating_color"> 
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="text-secondary">(33)</span> 
                                        </div>
                                        <p class="book_authore">product in stock</p>
                                        <span class="discount-price">৳1240</span>
                                        <div class="add_card_overlay1">
                                            <a href="#">Add to Cart</a>
                                        </div>
                                        <div class="view_pro_overlay1">
                                            <a class="add_no_1" href="#">Add to Cart</a>
                                            <a class="view_no_1" href="#">View Details</a>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 pb-5">
                                <div class="list_page_ditels text-center">
                                    <img class="img-fluid" src="/frontend/asset/img/Alor_Jholok-OnnoRokom_BigganBaksho-43e7b-109603.png" alt="">
                                        <h6>আলোর ঝলক</h6>
                                        <p>OnnoRokom BigganBaksho</p>
                                        <div class="rating-section text-center rating_color"> 
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="text-secondary">(33)</span> 
                                        </div>
                                        <p class="book_authore">product in stock</p>
                                        <span class="discount-price">৳1240</span>
                                        <div class="add_card_overlay1">
                                            <a href="#">Add to Cart</a>
                                        </div>
                                        <div class="view_pro_overlay1">
                                            <a class="add_no_1" href="#">Add to Cart</a>
                                            <a class="view_no_1" href="#">View Details</a>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 pb-5">
                                <div class="list_page_ditels text-center">
                                    <img class="img-fluid" src="/frontend/asset/img/Alor_Jholok-OnnoRokom_BigganBaksho-43e7b-109603.png" alt="">
                                        <h6>আলোর ঝলক</h6>
                                        <p>OnnoRokom BigganBaksho</p>
                                        <div class="rating-section text-center rating_color"> 
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="text-secondary">(33)</span> 
                                        </div>
                                        <p class="book_authore">product in stock</p>
                                        <span class="discount-price">৳1240</span>
                                        <div class="add_card_overlay1">
                                            <a href="#">Add to Cart</a>
                                        </div>
                                        <div class="view_pro_overlay1">
                                            <a class="add_no_1" href="#">Add to Cart</a>
                                            <a class="view_no_1" href="#">View Details</a>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 pb-5">
                                <div class="list_page_ditels text-center">
                                    <img class="img-fluid" src="/frontend/asset/img/Alor_Jholok-OnnoRokom_BigganBaksho-43e7b-109603.png" alt="">
                                        <h6>আলোর ঝলক</h6>
                                        <p>OnnoRokom BigganBaksho</p>
                                        <div class="rating-section text-center rating_color"> 
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="text-secondary">(33)</span> 
                                        </div>
                                        <p class="book_authore">product in stock</p>
                                        <span class="discount-price">৳1240</span>
                                        <div class="add_card_overlay1">
                                            <a href="#">Add to Cart</a>
                                        </div>
                                        <div class="view_pro_overlay1">
                                            <a class="add_no_1" href="#">Add to Cart</a>
                                            <a class="view_no_1" href="#">View Details</a>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 pb-5">
                                <div class="list_page_ditels text-center">
                                    <img class="img-fluid" src="/frontend/asset/img/Alor_Jholok-OnnoRokom_BigganBaksho-43e7b-109603.png" alt="">
                                        <h6>আলোর ঝলক</h6>
                                        <p>OnnoRokom BigganBaksho</p>
                                        <div class="rating-section text-center rating_color"> 
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="text-secondary">(33)</span> 
                                        </div>
                                        <p class="book_authore">product in stock</p>
                                        <span class="discount-price">৳1240</span>
                                        <div class="add_card_overlay1">
                                            <a href="#">Add to Cart</a>
                                        </div>
                                        <div class="view_pro_overlay1">
                                            <a class="add_no_1" href="#">Add to Cart</a>
                                            <a class="view_no_1" href="#">View Details</a>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 pb-5">
                                <div class="list_page_ditels text-center">
                                    <img class="img-fluid" src="/frontend/asset/img/Alor_Jholok-OnnoRokom_BigganBaksho-43e7b-109603.png" alt="">
                                        <h6>আলোর ঝলক</h6>
                                        <p>OnnoRokom BigganBaksho</p>
                                        <div class="rating-section text-center rating_color"> 
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="text-secondary">(33)</span> 
                                        </div>
                                        <p class="book_authore">product in stock</p>
                                        <span class="discount-price">৳1240</span>
                                        <div class="add_card_overlay1">
                                            <a href="#">Add to Cart</a>
                                        </div>
                                        <div class="view_pro_overlay1">
                                            <a class="add_no_1" href="#">Add to Cart</a>
                                            <a class="view_no_1" href="#">View Details</a>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 pb-5">
                                <div class="list_page_ditels text-center">
                                    <img class="img-fluid" src="/frontend/asset/img/Alor_Jholok-OnnoRokom_BigganBaksho-43e7b-109603.png" alt="">
                                        <h6>আলোর ঝলক</h6>
                                        <p>OnnoRokom BigganBaksho</p>
                                        <div class="rating-section text-center rating_color"> 
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="text-secondary">(33)</span> 
                                        </div>
                                        <p class="book_authore">product in stock</p>
                                        <span class="discount-price">৳1240</span>
                                        <div class="add_card_overlay1">
                                            <a href="#">Add to Cart</a>
                                        </div>
                                        <div class="view_pro_overlay1">
                                            <a class="add_no_1" href="#">Add to Cart</a>
                                            <a class="view_no_1" href="#">View Details</a>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 pb-5">
                                <div class="list_page_ditels text-center">
                                    <img class="img-fluid" src="/frontend/asset/img/Alor_Jholok-OnnoRokom_BigganBaksho-43e7b-109603.png" alt="">
                                        <h6>আলোর ঝলক</h6>
                                        <p>OnnoRokom BigganBaksho</p>
                                        <div class="rating-section text-center rating_color"> 
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="text-secondary">(33)</span> 
                                        </div>
                                        <p class="book_authore">product in stock</p>
                                        <span class="discount-price">৳1240</span>
                                        <div class="add_card_overlay1">
                                            <a href="#">Add to Cart</a>
                                        </div>
                                        <div class="view_pro_overlay1">
                                            <a class="add_no_1" href="#">Add to Cart</a>
                                            <a class="view_no_1" href="#">View Details</a>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 pb-5">
                                <div class="list_page_ditels text-center">
                                    <img class="img-fluid" src="/frontend/asset/img/Alor_Jholok-OnnoRokom_BigganBaksho-43e7b-109603.png" alt="">
                                        <h6>আলোর ঝলক</h6>
                                        <p>OnnoRokom BigganBaksho</p>
                                        <div class="rating-section text-center rating_color"> 
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="text-secondary">(33)</span> 
                                        </div>
                                        <p class="book_authore">product in stock</p>
                                        <span class="discount-price">৳1240</span>
                                        <div class="add_card_overlay1">
                                            <a href="#">Add to Cart</a>
                                        </div>
                                        <div class="view_pro_overlay1">
                                            <a class="add_no_1" href="#">Add to Cart</a>
                                            <a class="view_no_1" href="#">View Details</a>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 pb-5">
                                <div class="list_page_ditels text-center">
                                    <img class="img-fluid" src="/frontend/asset/img/Alor_Jholok-OnnoRokom_BigganBaksho-43e7b-109603.png" alt="">
                                        <h6>আলোর ঝলক</h6>
                                        <p>OnnoRokom BigganBaksho</p>
                                        <div class="rating-section text-center rating_color"> 
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="text-secondary">(33)</span> 
                                        </div>
                                        <p class="book_authore">product in stock</p>
                                        <span class="discount-price">৳1240</span>
                                        <div class="add_card_overlay1">
                                            <a href="#">Add to Cart</a>
                                        </div>
                                        <div class="view_pro_overlay1">
                                            <a class="add_no_1" href="#">Add to Cart</a>
                                            <a class="view_no_1" href="#">View Details</a>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 pb-5">
                                <div class="list_page_ditels text-center">
                                    <img class="img-fluid" src="/frontend/asset/img/Alor_Jholok-OnnoRokom_BigganBaksho-43e7b-109603.png" alt="">
                                        <h6>আলোর ঝলক</h6>
                                        <p>OnnoRokom BigganBaksho</p>
                                        <div class="rating-section text-center rating_color"> 
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="text-secondary">(33)</span> 
                                        </div>
                                        <p class="book_authore">product in stock</p>
                                        <span class="discount-price">৳1240</span>
                                        <div class="add_card_overlay1">
                                            <a href="#">Add to Cart</a>
                                        </div>
                                        <div class="view_pro_overlay1">
                                            <a class="add_no_1" href="#">Add to Cart</a>
                                            <a class="view_no_1" href="#">View Details</a>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 pb-5">
                                <div class="list_page_ditels text-center">
                                    <img class="img-fluid" src="/frontend/asset/img/Alor_Jholok-OnnoRokom_BigganBaksho-43e7b-109603.png" alt="">
                                        <h6>আলোর ঝলক</h6>
                                        <p>OnnoRokom BigganBaksho</p>
                                        <div class="rating-section text-center rating_color"> 
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="text-secondary">(33)</span> 
                                        </div>
                                        <p class="book_authore">product in stock</p>
                                        <span class="discount-price">৳1240</span>
                                        <div class="add_card_overlay1">
                                            <a href="#">Add to Cart</a>
                                        </div>
                                        <div class="view_pro_overlay1">
                                            <a class="add_no_1" href="#">Add to Cart</a>
                                            <a class="view_no_1" href="#">View Details</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection
