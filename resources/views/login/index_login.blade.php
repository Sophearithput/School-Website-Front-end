@extends('layout_master.master')

@section('title', 'Login')
@section('content')



<!--====== Page Banner Start ======-->

<section class="page-banner">
    <div class="page-banner-bg bg_cover" style="background-image: url(https://template.hasthemes.com/edumate-v1/edumate/assets/images/page-banner.webp);">
        <div class="container">
            <div class="banner-content text-center">
                <h2 class="title">Login</h2>
            </div>
        </div>
    </div>
</section>

<!--====== Page Banner Ends ======-->

<!--====== Login Start ======-->

<section class="login-register">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="login-register-content">
                    <h4 class="title">Login to Your Account</h4>

                    <div class="login-register-form">
                        <form action="#">
                            <div class="single-form">
                                <label>Username or email address *</label>
                                <input type="email">
                            </div>
                            <div class="single-form">
                                <label>Password</label>
                                <input type="password">
                            </div>
                            <div class="single-form">
                                <button class="main-btn">Login</button>
                            </div>
                            <div class="single-form d-flex justify-content-between">
                                <div class="checkbox">
                                    <input type="checkbox" id="remember">
                                    <label for="remember"><span></span> Remember Me</label>
                                </div>
                                <div class="forget">
                                    <a href="#">Lost Your Password</a>
                                </div>
                            </div>
                            <div class="single-form">
                                <label>You don't have account ?</label>
                                <a href="register.html" class="main-btn main-btn-2">Create Account Now</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== Login Ends ======-->

{{--<!--====== Newsletter Start ======-->--}}

{{--<section class="newsletter-area-2">--}}
{{--    <div class="container">--}}
{{--        <div class="newsletter-wrapper bg_cover" style="background-image: url(https://template.hasthemes.com/edumate-v1/edumate/assets/images/newsletter-bg-1.webp);">--}}
{{--            <div class="row align-items-center">--}}
{{--                <div class="col-lg-5">--}}
{{--                    <div class="section-title-2 mt-25">--}}
{{--                        <h2 class="title">Subscribe our Newsletter</h2>--}}
{{--                        <span class="line"></span>--}}
{{--                        <p>Even slightly believable. If you are going use a passage of Lorem Ipsum need some</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-7">--}}
{{--                    <div class="newsletter-form mt-30">--}}
{{--                        <form action="#">--}}
{{--                            <input type="text" placeholder="Enter your email here">--}}
{{--                            <button class="main-btn main-btn-2">Subscribe now</button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

{{--<!--====== Newsletter Ends ======-->--}}
@endsection
