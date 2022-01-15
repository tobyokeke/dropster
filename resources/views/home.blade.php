@extends('layouts.app')

@section('content')



    <div class="html-top-content">

    @include('layouts.header')

    <!--
=====================================================
SECTION 2
=====================================================
-->
        <div id="theme-main-banner" class="banner-one">
            <div data-src="images/home/slide-2.jpg">
                <div class="camera_caption">
                    <div class="main-container">
                        <div class="container">
                            <h5 class="wow fadeInUp animated">Neighbourhood Delivery Service</h5>
                            <h1 class="wow fadeInUp animated">Need to shop<br> but you're tired?</h1>
                            <p class="wow fadeInUp animated">We offer people the convenience of shopping from stores around you
                                <br> without leaving your home.</p>
                            <a href="https://wa.me/08179390873"
                               target="_blank"
                               class="tran3s wow fadeInRight animated button-two" data-wow-delay="0.499s">
                                <img src="images/whatsapp.png" height="30" alt="">Whatsapp</a>
                            <a href="tel:+2348179390873" class="tran3s wow fadeInRight animated button-two"
                               data-wow-delay="0.100s"><img src="images/icon/logosmall.png" alt="">Call</a>
                            <div class="image-wrapper wow fadeInUp animated" data-wow-delay="0.75s">
                                <img src="images/home/s.png" alt="">
                            </div>
                        </div> <!-- /.container -->
                    </div> <!-- /.main-container -->
                </div> <!-- /.camera_caption -->
            </div>
            <div data-src="images/home/slide-2.jpg">
                <div class="camera_caption">
                    <div class="main-container">
                        <div class="container">
                            <h5 class="wow fadeInUp animated">On-Demand Delivery Service in Abuja</h5>
                            <h1 class="wow fadeInUp animated">Need A Package <br>Delivered?</h1>
                            <p class="wow fadeInUp animated">We help business owners eliminate delay and frustration
                                <br> from door 2 door deliveries.</p>
                            <a href="" class="tran3s wow fadeInLeft animated button-one" data-wow-delay="0.499s"><i
                                        class="fa fa-apple" aria-hidden="true"></i>App Store</a>
                            <a href="https://play.google.com/store/apps/details?id=com.gurudeveloperinc.dropster&hl=en"
                               class="tran3s wow fadeInRight animated button-two" data-wow-delay="0.499s"><img
                                        src="images/icon/2.png" alt="">GooglePlay</a>
                            <a href="https://dropsterng.com/app" class="tran3s wow fadeInRight animated button-two"
                               data-wow-delay="0.499s"><img src="images/icon/logosmall.png" alt="">Web App</a>
                            <div class="image-wrapper wow fadeInUp animated" data-wow-delay="0.75s">
                                <img src="images/home/s.png" alt="">
                            </div>
                        </div> <!-- /.container -->
                    </div> <!-- /.main-container -->
                </div> <!-- /.camera_caption -->
            </div>
        </div> <!-- /.SECTION 2 -->


        <!--
        =====================================================
        SECTION 3
        =====================================================
        -->
        <div class="what-we-do bg">
            <div class="container">
                <div class="theme-title-one text-center">

                    <h2>Avoid disappointment </h2>
                    <h3>Get your items in 15 mins with Neighbourhood delivery</h3>
                    <br>

                    <p>Deliveries are unreliable in Nigeria for different reasons. We help restore the reliability by offering
                        deliveries from stores in your neighborhood.

                        That way, you get your items in 15 mins</p>
                    <br><br>
                    <h5>Supported Estates</h5>
                    <ul>
                        <li>Games Village, Abuja</li>
                        <li>More coming soon</li>
                    </ul>


                </div> <!-- /.theme-title-one -->

                <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.SECTION 3 -->


        <br>
        <br>
        <br>
        <br>
        <!--
        =====================================================
        SECTION 7
        =====================================================
        -->
        <div class="app-screenshot">
            <h2>Testimonies</h2>
            <br>
            <p>See what others like you are saying about our delivery service<br>
                <b>Real</b> reviews from real people.</p>
            <div class="screenshot-container">
                <div class="phone-mockup"><img src="images/home/mobile-mockup.png" alt="" class=""></div>
                <div class="slider-row">
                    <div class="screenshoot-slider">
                        <div class="item"><img src="images/home/apps-1.png" alt=""></div>
                        <div class="item"><img src="images/home/apps-2.png" alt=""></div>
                        <div class="item"><img src="images/home/apps-3.png" alt=""></div>
                        <div class="item"><img src="images/home/apps-4.png" alt=""></div>
                        <div class="item"><img src="images/home/apps-3.png" alt=""></div>
                    </div> <!-- /.screenshoot-slider -->
                </div> <!-- /.row -->
            </div> <!-- /.screenshot-container -->
        </div> <!-- /.app-screenshot -->


        <!--
        =====================================================
         SECTION 8
        =====================================================
        -->
        <div class="google-map-area">
            <div class="container">
                <div class="map-image-warpper">
                    <img src="images/home/map-1.png" alt="">
                    <div class="placeholder">
                        <img src="images/logo/map-placeholder-1.png" alt="">
                        <div class="map-meta-data tran3s">
                            <h6>Dropster Main Office</h6>
                            <p>21st Street, Games Village, Abuja.</p>
                        </div>
                    </div>
                </div> <!-- /.map-image-warpper -->
            </div>
        </div> <!-- /.google-map-area -->

    </div>


@endsection
