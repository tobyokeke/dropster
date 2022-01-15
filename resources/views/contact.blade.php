@extends('layouts.app')

@section('content')

    <div id="loader-wrapper">
        <div id="loader"></div>
    </div>



    <div class="html-top-content">

    @include('layouts.header')

    <!--
        =============================================
            Theme Inner Banner
        ==============================================
        -->
        <div class="inner-page-banner">
            <div class="opacity">
                <h1>Contact Information</h1>
                <h5> We are available on the following platforms.</h5>
            </div> <!-- /.opacity -->
        </div> <!-- /inner-page-banner -->


        <!--
        =============================================
            Blog Details
        ==============================================
        -->
        <!-- /.what-we-do -->
        <div class="contact-us-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-xs-12 pull-right">
                        <address class="contact-address">
                            <div class="theme-title-one">
                                <h6>Dropster Team</h6>
                                <h2>Don’t Hesitate to contact us for any kind of information</h2>
                            </div> <!-- /.theme-title -->
                            <p>Use the live chat below for immediate assistance.</p>
                            <a href="#" class="tran3s call">+234 907 185 5088</a>
                            <p>Runs 8am - 6pm<br>Monday - Sunday</p>
                            <p>Email us: support @ dropsterng.com</p>
                        </address> <!-- /.contact-address -->
                    </div>
                    <div class="col-md-7 col-xs-12">

                        <img src="{{url('images/contactimage.jpg')}}" class="img img-responsive" width="100%">
                    </div> <!-- /.col- -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.contact-us-section -->
        <br>
        <br>

        <div class="what-we-do bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp">
                        <div class="single-block tran3s">
                            <img src="images/icon/instagram.png" alt="" class="tran4s">
                            <h6>Instagram</h6>
                            <p>We have fun moments too <br> @dropsterng</p>

                        </div> <!-- /.single-block -->
                    </div> <!-- /.col- -->
                    <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="single-block tran3s">
                            <img src="images/icon/faceboook.png" alt="" class="tran4s">
                            <h6>Facebook</h6>
                            <p>Stay updated on promos <br> dropsterng</p>

                        </div> <!-- /.single-block -->
                    </div> <!-- /.col- -->
                    <div class="col-md-4 hidden-sm col-xs-12 wow fadeInUp" data-wow-delay="0.150s">
                        <div class="single-block tran3s">
                            <img src="images/icon/twitter.png" alt="" class="tran4s">
                            <h6>Twitter</h6>
                            <p>Share your tweets <br> @dropsterng</p>

                        </div> <!-- /.single-block -->
                    </div> <!-- /.col- -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div>
        <br>
        <br>
        <!-- /.blog-details -->
    </div> <!-- /.html-top-content -->



@endsection