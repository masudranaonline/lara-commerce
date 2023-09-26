@extends('frontend/layout/master')

@section('content')
    

        <!-- start login section -->

        <div class="login  pt-5 pb-5">
            <div class="container ">
                <div class="row ">
                    <div class="col-md-3 col-sm-12"></div>
                    <div class="col-md-6 col-sm-12 product_bg shadow text-center pb-5">.
                        <div class="login_top pb-3">
                            <p>LOGIN / SIGN UP</p>
                        </div>
                        <div class="login_btn pt-3 pb-4">
                            <button type="button" class="btn btn-primary"><img class="mr-5" src="asset/img/icon-fb.png" alt="">  Facebook </button>
                            <button type="button" class="btn btn-success"><img src="asset/img/icon-google.png" alt="">  Google </button>
                        </div>
                        <span>OR</span>
                        <div class="login_mail pt-5 pb-5">
                            <label><img src="asset/img/icon-email.png" alt=""><input type="text" placeholder="Email or Phone"></label>
                        </div>
                        <div class="login_button">
                            <a href="#">Next</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

    <!-- end login section -->
    <!-- start customer Care section -->

    <div class="customer mt-5 product_bg  pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                    <img class="onnorokom" src="asset/img/onnorokom_logo.png" alt="">
                </div>
                <div class="col-md-8">
                    <div class="services pt-4">
                        <div class="logo">
                            <img src="asset/img/rok-icon-whatsapp.svg" alt="">
                        </div>
                        <div class="details">
                            <h5>Customer Care: <a href="#">01519521971</a><span>(Whatsapp Message Only)</span>or email to <a href="#">care@rokomari.com</a></h5>
                        </div>
                    </div>
                    <div class="services">
                        <div class="logo">
                            <img src="asset/img/rok-icon-whatsapp.svg" alt="">
                        </div>
                        <div class="details">
                            <h5>E-mail: <a href="#">01519521971</a><span>(Whatsapp Message Only)</span>or email to <a href="#">care@rokomari.com</a></h5>
                        </div>
                    </div>
                    <div class="services">
                        <div class="logo">
                            <img src="asset/img/rok-icon-whatsapp.svg" alt="">
                        </div>
                        <div class="details">
                            <h5>E-mail: <a href="#">01519521971</a><span>(Whatsapp Message Only)</span>or email to <a href="#">care@rokomari.com</a></h5>
                        </div>
                    </div>
                    <div class="services">
                        <div class="logo">
                            <img src="asset/img/rok-icon-whatsapp.svg" alt="">
                        </div>
                        <div class="details">
                            <h5>E-mail: <a href="#">01519521971</a><span>(Whatsapp Message Only)</span>or email to <a href="#">care@rokomari.com</a></h5>
                        </div>
                    </div>
                    <div class="services">
                        <div class="logo">
                            <img src="asset/img/rok-icon-whatsapp.svg" alt="">
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