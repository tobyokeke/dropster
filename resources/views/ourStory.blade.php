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
                <h1>We are dropster</h1>
                <h5> Eliminating stress and securing the future of your business </h5>

            </div> <!-- /.opacity -->
        </div> <!-- /inner-page-banner -->


        <!--
        =============================================
            Blog Details
        ==============================================
        -->
        <!-- /.what-we-do -->
        <div class="boost-your-phone">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xs-12 float-right  wow fadeInRight">
                        <div class="text">
                            <div class="theme-title-two">
                                <h2>Meet Dropster</h2>
                                <p> The software powered delivery service that understands how you feel when things don’t go as planned.</p>
                                <br>
                                <p> From cleaning messy food colouring spills, to losing your way while driving & running deliveries yourself or forgetting to make dinner because you’re passionate about your business and can’t stop learning new things</p>
                                <br>
                                <p>We know how you feel about your business, we’re here to help.</p>
                            </div> <!-- /.theme-title-two -->

                        </div>
                    </div>
                </div>
                <div class="boster-image-wrapper  wow fadeInLeft">
                    <br>
                    <br>
                    <img src="images/home/team.jpg" alt="">

                </div> <!-- /.boster-image-wrapper -->
            </div> <!-- /.container -->
        </div>







        <div class="advance-feature">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12 wow fadeInLeft">
                        <div class="feature-text">
                            <div class="theme-title-two">
                                <h2>Mission & Vision</h2>
                                <p>Eliminate delay and frustration from door to door deliveries.</p>
                            </div> <!-- /.theme-title-two -->
                            <p>To provide a pain-free network of instant deliveries to diligent business owners</p>
                        </div>
                    </div> <!-- /.col- -->

                    <div class="col-md-6 col-xs-12 wow fadeInRight">
                        <div class="feature-warpper">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="single-feature bg-one m-fix js-tilt">
                                        <i class="flaticon-diamond"></i>
                                        <h5>Partnership</h5>
                                        <p>Our Customers and their customers are our champions and stakeholders in every decision we make </p>
                                    </div>
                                    <div class="single-feature bg-two js-tilt">
                                        <i class="flaticon-squares"></i>
                                        <h5>Reliability</h5>
                                        <p>Never wonder again, how to solve your logistics concerns.  </p>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="single-feature bg-three js-tilt">
                                        <i class="flaticon-squares"></i>
                                        <h5>Transparency</h5>
                                        <p>No hidden charges with excellent customer experience.  </p>
                                    </div>
                                    <div class="single-feature bg-four js-tilt">
                                        <i class="flaticon-diamond"></i>
                                        <h5>Growth</h5>
                                        <p>Problem solving and innovating to become better for you and your future. </p>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /.feature-warpper -->
                    </div>
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div>
        <!-- /.blog-details -->
    </div> <!-- /.html-top-content -->




@endsection