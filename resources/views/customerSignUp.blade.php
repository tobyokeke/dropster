@extends('layouts.app')

@section('content')

    <div id="loader-wrapper">
        <div id="loader"></div>
    </div>



    <div class="html-top-content">

        @include('layouts.header')

        <main>
        <div id="form_container">
            <div class="row">
                <div class="col-md-5">
                    <div id="left_form">
                        <figure><img src="images/logo/logo3.png" alt=""></figure>
                        <h2>Sign Up</h2>
                        <p>Enjoy, smart movement of your package (Asoebi, Food, ButterCream Cake, Laptop Charger, Groceries) from point A to point B with accurate information, delivered in 30 minutes.</p>
                        <a href="#0" id="more_info" data-toggle="modal" data-target="#more-info"><i class="pe-7s-info"></i></a>
                    </div>
                </div>
                <div class="col-md-7">

                    <div id="wizard_container">
                        <div id="top-wizard">
                            <div id="progressbar"></div>
                        </div>
                        <!-- /top-wizard -->
                        <form name="example-1" id="wrapped" method="POST">
                            <input id="website" name="website" type="text" value="">
                            <!-- Leave for security protection, read docs for details -->
                            <div id="middle-wizard">

                                <div class="step">
                                    <h3 class="main_question"><strong>1/3</strong>Please fill with your details</h3>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" name="firstname" class="form-control required" placeholder="First name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" name="lastname" class="form-control required" placeholder="Last name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" name="username" class="form-control required" placeholder="Instagram Handle">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" name="reffered" class="form-control" placeholder="Reffered By (optional)">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control required" placeholder="Your Email">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" name="phone" class="form-control required" placeholder="Phone Number">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" name="age" class="form-control" placeholder="Age">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group radio_input">
                                                <label><input type="radio" value="Male" checked name="gender" class="icheck">Male</label>
                                                <label><input type="radio" value="Female" name="gender" class="icheck">Female</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->
                                </div>
                                <!-- /step-->

                                <div class="step">
                                    <h3 class="main_question"><strong>2/3</strong>Please fill with additional info</h3>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="address" class="form-control required" placeholder="Address">
                                            </div>
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" name="city" class="form-control required" placeholder="City">
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /row -->
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="styled-select">
                                                    <select class="required" name="country">
                                                        <option value="" selected>Choose your profession</option>
                                                        <option value="Stylist">Stylist</option>
                                                        <option value="Pastry Chef">Pastry Chef</option>
                                                        <option value="Chef">Chef</option>
                                                        <option value="Fashion Designer">Fashion Designer</option>
                                                        <option value="Corporate Worker">Corporate Worker</option>
                                                        <option value="Laundry">Laundry</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->
                                </div>
                                <!-- /step-->

                                <div class="submit step">
                                    <h3 class="main_question"><strong>3/3</strong>Your'e Done!</h3>
                                    <br>
                                    <h3>Click Submit to Continue</h3>
                                    <br>
                                    <div class="form-group terms">
                                        <input name="terms" type="checkbox" class="icheck required" value="yes">
                                        <label>Please accept <a href="#" data-toggle="modal" data-target="#terms-txt">terms and conditions</a> ?</label>
                                    </div>
                                </div>
                                <!-- /step-->
                            </div>
                            <!-- /middle-wizard -->
                            <div id="bottom-wizard">
                                <button type="button" name="backward" class="backward">Backward </button>
                                <button type="button" name="forward" class="forward">Forward</button>
                                <button type="submit" name="process" class="submit">Submit</button>
                            </div>
                            <!-- /bottom-wizard -->
                        </form>
                    </div>
                    <!-- /Wizard container -->
                </div>
            </div><!-- /Row -->
        </div><!-- /Form_container -->
    </main>

    </div>

@endsection