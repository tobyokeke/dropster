@extends('layouts.app')

@section('content')

    <div id="loader-wrapper">
        <div id="loader"></div>
    </div>


    <style>
        h1 {
            font-size: 2em !important;
        }
    </style>

    <div class="html-top-content">

        @include('layouts.header')

        <!--
        =============================================
            Theme Inner Banner
        ==============================================
        -->
        <div class="inner-page-banner2">
            <div class="opacity">
                <h1>Confirm Prices between locations</h1>
                <h5> See how below.</h5>
            </div> <!-- /.opacity -->
        </div> <!-- /inner-page-banner -->



            <!-- /.blog-main-post -->

        <div class="pricing-plan-section" align="center">
            <div class="container" align="center">

                <div class="row col-md-12 col-sm-12 col-xs-12" style="margin-top: -200px;
margin-bottom: 50px;">
                    <div id="map" style="height:300px; !important;width:100% !important;"></div>
                    <div id="infowindow-content">
                        <img src="" width="16" height="16" id="place-icon">
                        <span id="place-name" class="title"></span><br>
                        <span id="place-address" ></span> <br>
                    </div>
                </div>

                <div class="row" align="center">
                    <div class="col-md-6 col-xs-12 wow fadeInLeft">
                        <div class="theme-title-one">
                            <h6>PRICE CALCULATOR </h6>
                            <h2>Get your price estimate <br>Live & direct.</h2>
                            <p>Bill your own customers with ease, avoid extra charges</p>
                        </div> <!-- /.theme-title -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#monthly" onclick="checkPrice()">One Way</a></li>
                            <li><a data-toggle="tab" href="#yearly" onclick="checkPrice1()">Two Way</a></li>
                        </ul>
                    </div> <!-- /.col- -->

                    <div class="col-md-6 col-xs-12 wow fadeInRight">
                        <div class="tab-content">
                            <div class="table-content">
                                <div id="monthly" class="tab-pane price-table in active">
                                    <div class="col-inner">
                                        <h6>One Way Delivery</h6>
                                        <br>
                                        <div class="contact-us-section">
                                            <form class="contact-us-form form-validation" auto-complete="off" style="padding-right: 0">

                                                <div class="col-md-12 ">
                                                    <input type="text" data-type="from" onkeyup="autoComplete(this)" id="from" placeholder="Enter pickup address" required name="sub"><br>
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="text" data-type="to" onkeyup="autoComplete(this)" id="to" placeholder="Enter drop-off address" required name="sub">
                                                </div>

                                                {{--<a href="#" class="tran3s theme-button"><span></span> ESTIMATE PRICE</a>--}}

                                                <div id="loading" align="center" class="hidden"><i class="fa fa-spin fa-spinner"></i> </div>

                                                <p align="center" id="price" style="color:darkgreen;font-size: 24px"></p>

                                                <br>
                                                <p >Estimates are only valid for Abuja addresses.</p>

                                            </form>

                                        </div>

                                    </div>
                                </div> <!-- /#monthly -->
                                <div id="yearly" class="tab-pane price-table">
                                    <div class="col-inner">
                                        <h6>Two Way Delivery</h6>
                                        <br>
                                        <p>Alternatively called "return request". This is for when you want the dropper to go a destination then return to you</p>
                                        <div class="contact-us-section">
                                            <form style="padding-right: 0" class="contact-us-form form-validation" auto-complete="off">

                                                <div class="col-md-12 ">
                                                    <input type="text" data-type="from" onkeyup="autoComplete1(this)" id="from1" placeholder="Enter pickup address" required><br>
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="text" data-type="to" onkeyup="autoComplete1(this)" id="to1" placeholder="Enter drop-off address" required >
                                                </div>

                                            </form>
                                        </div>

                                        <div id="loading1" align="center" class="hidden"><i class="fa fa-spin fa-spinner"></i> </div>

                                        <p align="center" id="price1" style="color:darkgreen;font-size: 24px"></p>

                                    </div>
                                </div> <!-- /#yearly -->
                            </div> <!-- /.table-content -->
                        </div> <!-- /.tab-content -->
                    </div>
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div>



        <br>
        <br>
        <br>
        <br>

        <!-- /.tag-option -->
    </div> <!-- /.wrapper -->

    <script>
        var map,lastfromLat,lastfromLng;

        $(document).ready(function(){
            //clear location history
            localStorage.removeItem('from-place-lat');
            localStorage.removeItem('from-place-lng');
            localStorage.removeItem('to-place-lng');
            localStorage.removeItem('to-place-lng');

            var mapView = document.getElementById('map');
            var latLng = new google.maps.LatLng(9.070400, 7.487462);

            var mapOptions = {
                center: latLng,
                zoom: 15,
                tilt:30,
                disableDefaultUI:false,
                mapTypeControl:false,
                zoomControl:true,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                clickableIcons:false
            };

            map = new google.maps.Map(mapView, mapOptions);


        });

        function isNumber(item) {
            return !isNaN(item) || item !== null;
        }

        function autoComplete(input) {

            var str = input.value;
            var prefix = 'Abuja, ';
            if(str.indexOf(prefix) == 0) {

            } else {
                if (prefix.indexOf(str) >= 0) {
                    input.value = prefix;
                } else {
                    input.value = prefix+str;
                }
            }

            var options = {
                language: 'en-US',
                // types: ['(cities)'],
                componentRestrictions: { country: "ng" }
            };

            var autocomplete = new google.maps.places.Autocomplete(input,options);
            autocomplete.bindTo('bounds', map);


            var infowindow = new google.maps.InfoWindow();
            var infowindowContent = document.getElementById('infowindow-content');
            infowindow.setContent(infowindowContent);
            var marker = new google.maps.Marker({
                map: map,
                anchorPoint: new google.maps.Point(0, -29)
            });



            autocomplete.addListener('place_changed', function() {
                infowindow.close();
                marker.setVisible(false);
                var place = autocomplete.getPlace();
                if (!place.geometry) {
                    // User entered the name of a Place that was not suggested and
                    // pressed the Enter key, or the Place Details request failed.

                    return;
                }

                // If the place has a geometry, then present it on a map.
                if (place.geometry.viewport) {
                    map.fitBounds(place.geometry.viewport);
                } else {
                    map.setCenter(place.geometry.location);
                    map.setZoom(17);  // Why 17? Because it looks good.
                }
                marker.setPosition(place.geometry.location);
                marker.setVisible(true);

                var address = '';
                if (place.address_components) {
                    address = [
                        (place.address_components[0] && place.address_components[0].short_name || ''),
                        (place.address_components[1] && place.address_components[1].short_name || ''),
                        (place.address_components[2] && place.address_components[2].short_name || ''),
                        (place.address_components[3] && place.address_components[3].short_name || '')
                    ].join(' ');
                }


                infowindowContent.children['place-icon'].src = place.icon;
                infowindowContent.children['place-name'].textContent = place.name;
                infowindowContent.children['place-address'].textContent = address;

                if(input.dataset.type === "from"){
                    localStorage.setItem("from-place-lat",place.geometry.viewport.f.f);
                    localStorage.setItem("from-place-lng",place.geometry.viewport.b.b);

                }

                if(input.dataset.type === "to"){
                    localStorage.setItem("to-place-lat",place.geometry.viewport.f.f);
                    localStorage.setItem("to-place-lng",place.geometry.viewport.b.b);

                }


                input.setAttribute("data-place-lat", place.geometry.viewport.f.f);
                input.setAttribute("data-place-lng", place.geometry.viewport.b.b);
                infowindow.open(map, marker);

                setTimeout(checkPrice(),500);

            });

        }

        function checkPrice(){

            if(localStorage.getItem('from-place-lat') > 0 &&
                localStorage.getItem('from-place-lng') > 0 &&
                localStorage.getItem('to-place-lng') > 0 &&
                localStorage.getItem('to-place-lng') > 0 ){

                var fromLat = $('#fromLat');
                var fromLng = $('#fromLng');
                var toLat   = $('#toLat');
                var toLng  = $('#toLng');

                // make it show loading and clear price with new search
                var loading = $('#loading');
                loading.removeClass("hidden");
                $('#price').text("");

                $.ajax({
                    url:"{{env('BACKENDURL') . "api/price"}}",
                    method: "post",
                    data:{
                        _token : "{{csrf_token()}}",
                        fromLat : localStorage.getItem('from-place-lat'),
                        fromLng : localStorage.getItem('from-place-lng'),
                        toLat : localStorage.getItem('to-place-lat'),
                        toLng : localStorage.getItem('to-place-lng'),
                        vcid : "1",
                        deliveryType : "sender"
                    },
                    success: function (response) {

                        console.log('checking price');

                        loading.addClass("hidden");

                        fromLat.val(localStorage.getItem('from-place-lat'));
                        fromLng.val(localStorage.getItem('from-place-lng'));
                        toLat.val(localStorage.getItem('to-place-lat'));
                        toLng.val(localStorage.getItem('to-place-lng'));

                        $('#amount').val(response);
                        $('#price').text("NGN" + response);

                    },
                    error: function (error) {
                        loading.addClass("hidden");
                        $('#price').text("");
                        console.log(error);
                    }
                });
            }


        }

        function autoComplete1(input) {

            var str = input.value;
            var prefix = 'Abuja, ';
            if(str.indexOf(prefix) == 0) {

            } else {
                if (prefix.indexOf(str) >= 0) {
                    input.value = prefix;
                } else {
                    input.value = prefix+str;
                }
            }

            var options = {
                language: 'en-US',
                // types: ['(cities)'],
                componentRestrictions: { country: "ng" }
            };

            var autocomplete = new google.maps.places.Autocomplete(input,options);
            autocomplete.bindTo('bounds', map);


            var infowindow = new google.maps.InfoWindow();
            var infowindowContent = document.getElementById('infowindow-content');
            infowindow.setContent(infowindowContent);
            var marker = new google.maps.Marker({
                map: map,
                anchorPoint: new google.maps.Point(0, -29)
            });



            autocomplete.addListener('place_changed', function() {
                infowindow.close();
                marker.setVisible(false);
                var place = autocomplete.getPlace();
                if (!place.geometry) {
                    // User entered the name of a Place that was not suggested and
                    // pressed the Enter key, or the Place Details request failed.

                    return;
                }

                // If the place has a geometry, then present it on a map.
                if (place.geometry.viewport) {
                    map.fitBounds(place.geometry.viewport);
                } else {
                    map.setCenter(place.geometry.location);
                    map.setZoom(17);  // Why 17? Because it looks good.
                }
                marker.setPosition(place.geometry.location);
                marker.setVisible(true);

                var address = '';
                if (place.address_components) {
                    address = [
                        (place.address_components[0] && place.address_components[0].short_name || ''),
                        (place.address_components[1] && place.address_components[1].short_name || ''),
                        (place.address_components[2] && place.address_components[2].short_name || ''),
                        (place.address_components[3] && place.address_components[3].short_name || '')
                    ].join(' ');
                }


                infowindowContent.children['place-icon'].src = place.icon;
                infowindowContent.children['place-name'].textContent = place.name;
                infowindowContent.children['place-address'].textContent = address;

                if(input.dataset.type === "from"){
                    localStorage.setItem("from-place-lat",place.geometry.viewport.f.f);
                    localStorage.setItem("from-place-lng",place.geometry.viewport.b.b);

                }

                if(input.dataset.type === "to"){
                    localStorage.setItem("to-place-lat",place.geometry.viewport.f.f);
                    localStorage.setItem("to-place-lng",place.geometry.viewport.b.b);

                }


                input.setAttribute("data-place-lat", place.geometry.viewport.f.f);
                input.setAttribute("data-place-lng", place.geometry.viewport.b.b);
                infowindow.open(map, marker);

                setTimeout(checkPrice(),500);

            });

        }

        function checkPrice1(){

            //take content from other request type
            $("#from1").text($("#from").text());
            $("#to1").text($("#to").text());

            if(localStorage.getItem('from-place-lat') > 0 &&
                localStorage.getItem('from-place-lng') > 0 &&
                localStorage.getItem('to-place-lng') > 0 &&
                localStorage.getItem('to-place-lng') > 0 ){

                var fromLat = $('#fromLat');
                var fromLng = $('#fromLng');
                var toLat   = $('#toLat');
                var toLng  = $('#toLng');

                // make it show loading and clear price with new search
                var loading = $('#loading1');
                loading.removeClass("hidden");
                $('#price').text("");

                $.ajax({
                    url:"{{env('BACKENDURL') . "api/price"}}",
                    method: "post",
                    data:{
                        _token : "{{csrf_token()}}",
                        fromLat : localStorage.getItem('from-place-lat'),
                        fromLng : localStorage.getItem('from-place-lng'),
                        toLat : localStorage.getItem('to-place-lat'),
                        toLng : localStorage.getItem('to-place-lng'),
                        vcid : "1",
                        deliveryType : "return"
                    },
                    success: function (response) {

                        loading.addClass("hidden");

                        fromLat.val(localStorage.getItem('from-place-lat'));
                        fromLng.val(localStorage.getItem('from-place-lng'));
                        toLat.val(localStorage.getItem('to-place-lat'));
                        toLng.val(localStorage.getItem('to-place-lng'));

                        $('#amount1').val(response);
                        $('#price1').text("NGN" + response);

                    },
                    error: function (error) {
                        loading.addClass("hidden");
                        $('#price').text("");
                        console.log(error);
                    }
                });
            }


        }
    </script>


@endsection