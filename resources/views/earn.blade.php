@extends('layouts.app')

@section('content')

    <!-- ===================================================
				Loading Transition
			==================================================== -->
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
                <h1>Become a Vehicle Partner</h1>
                <h5> You will earn money in your sleep that helps you secure<br> an additional N7000– N8000 in weekly income</h5>
            </div> <!-- /.opacity -->
        </div> <!-- /inner-page-banner -->


        <!--
        =============================================
            Blog Details
        ==============================================
        -->
        <div class="what-we-do bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp">
                        <div class="single-block tran3s">
                            <img src="images/icon/7.png" alt="" class="tran4s">
                            <h6>Invest in a Vehicle</h6>
                            <p>Already own a vehicle? A Bike? A Car? <br> Great! Read below.</p>

                        </div> <!-- /.single-block -->
                    </div> <!-- /.col- -->
                    <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="single-block tran3s">
                            <img src="images/icon/8.png" alt="" class="tran4s">
                            <h6>Invest Cash Equivalent</h6>
                            <p>Don’t want the hassle of getting a vehicle?<br> No problem read below. </p>

                        </div> <!-- /.single-block -->
                    </div> <!-- /.col- -->
                    <div class="col-md-4 hidden-sm col-xs-12 wow fadeInUp" data-wow-delay="0.150s">
                        <div class="single-block tran3s">
                            <img src="images/icon/9.png" alt="" class="tran4s">
                            <h6>Join Investor merge</h6>
                            <p>Not enough money? No vehicle?<br> Create or join a merge and get profits split</p>

                        </div> <!-- /.single-block -->
                    </div> <!-- /.col- -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.what-we-do -->

        <div class="blog-details blog-v3">
            <div class="container">
                <div class="wrapper">
                    <div class="blog-main-post">

                        <h3>STEP 1</h3>
                        <h6>Fill out the <a href="signup.html">Vehicle Partners Form</a> We'll contact you within 24 hours.</h6>
                        <p>Your response is important for us to assess if you have all the necessary requirements to become a vehicle partner.</p> <br>

                        <h3>STEP 2</h3>
                        <h6>Once approved, you can place your motorcycle(s) OR cars(s) in the Dropster Network.</h6>
                        <p>Your partnership is confirmed and your vehicle outfitted with branding and insurance, then it becomes a part of the network and can start making you money</p> <br>

                        <h3>STEP 3</h3>
                        <h6>Start earning.</h6>
                        <p>Recieve your earnings in regular payouts and enjoy your alternative income.</p> <br>



                        <p>Our <a href="signup.html">Vehicle Partners Program</a> offers you the ability to be part of the Dropster network by giving you the opportunity to add vehicles to the network. Your vehicles in the network enable you earn money in your sleep while we operate. You receive live updates on your earnings and your money is transferred to your registered bank account daily. It's a risk free investment.

                            <strong>Own. Earn. Cash Out.</strong></p>


                    </div> <!-- /.blog-main-post -->

                    <div class="pricing-plan-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-xs-12 wow fadeInLeft">
                                    <div class="theme-title-one">
                                        <h6>DIVISION SCHEME & ENTRY COSTS</h6>
                                        <h2>More specialized categories coming soon</h2>
                                        <p>We have different types of categories to choose that <br>suit your partnership needs </p>
                                    </div> <!-- /.theme-title -->
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#monthly">Divison </a></li>
                                        <li><a data-toggle="tab" href="#yearly">Entry Cost</a></li>
                                    </ul>
                                </div> <!-- /.col- -->

                                <div class="col-md-6 col-xs-12 wow fadeInRight">
                                    <div class="tab-content">
                                        <div class="table-content">
                                            <div id="monthly" class="tab-pane price-table in active">
                                                <div class="col-inner">
                                                    <h5>DIVISION SCHEME</h5>
                                                    <br>
                                                    <ul>
                                                        <li>Partner    <b>60%</b></li>
                                                        <li>Maintenance  <b>20%</b></li>
                                                        <li>Administration  <b>20%</b></li>

                                                    </ul>
                                                    <a href="#" class="tran3s theme-button"><span></span> Sign up</a>
                                                </div>
                                            </div> <!-- /#monthly -->
                                            <div id="yearly" class="tab-pane price-table">
                                                <div class="col-inner">
                                                    <h5>ENTRY COST</h5>
                                                    <br>
                                                    <ul>
                                                        <li>Bike <b>₦400,000</b></li>
                                                        <li>Car <b>₦1.5M</b></li>

                                                    </ul>
                                                    <a href="#" class="tran3s theme-button"><span></span> Sign up</a>
                                                </div>
                                            </div> <!-- /#yearly -->
                                        </div> <!-- /.table-content -->
                                    </div> <!-- /.tab-content -->
                                </div>
                            </div> <!-- /.row -->
                        </div> <!-- /.container -->
                    </div>


                    <div class="tag-option clearfix">
                        <ul class="float-left">
                            <li>Support:</li>
                            <li><a href="terms.html" class="tran3s">Terms & Conditions ||</a></li>

                            <li><a href="#" class="tran3s">Partnership Form</a></li>
                        </ul>

                    </div>



                    <!-- /.tag-option -->
                </div> <!-- /.wrapper -->
            </div> <!-- /.container -->


        </div> <!-- /.blog-details -->
    </div> <!-- /.html-top-content -->


@endsection