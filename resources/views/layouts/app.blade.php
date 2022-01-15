<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home | Dropster - A delivery service</title>
    <meta name="description" content="Dropster "
    <meta name="keywords" content="dropster, dropsterng, delivery service in abuja">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="{{url('images/logo/logoo.png')}}">


    <!-- Main style sheet -->
    <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
    <!-- responsive style sheet -->
    <link rel="stylesheet" type="text/css" href="{{url('css/responsive.css')}}">


    <!-- Fix Internet Explorer ______________________________________-->

    <!--[if lt IE 9]>
    <!--<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>-->
    <script src="{{url('vendor/html5shiv.js')}}"></script>
    <script src="{{url('vendor/respond.js')}}"></script>
    <!-- [endif]-->

    <script type="text/javascript" src="{{url('vendor/jquery.2.2.3.min.js')}}"></script>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyD38rNyWsCdOAxpvdeuHunyR6zLTxDfLYc&libraries=places&region=NG"></script>

    <!-- Hotjar Tracking Code for https://web.dropsterng.com/ -->
{{--    <script>--}}
{{--        (function(h,o,t,j,a,r){--}}
{{--            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};--}}
{{--            h._hjSettings={hjid:729240,hjsv:6};--}}
{{--            a=o.getElementsByTagName('head')[0];--}}
{{--            r=o.createElement('script');r.async=1;--}}
{{--            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;--}}
{{--            a.appendChild(r);--}}
{{--        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');--}}
{{--    </script>--}}


</head>

<body>
<div class="main-page-wrapper home-page-one">



    @yield('content')


    @include('layouts.footer')



    <!-- Scroll Top Button -->
    <button class="scroll-top tran3s color-one-bg">
        <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
    </button>




    <!-- Js File_________________________________ -->

{{--    <!--Start of Tawk.to Script-->--}}
{{--    <script type="text/javascript">--}}
{{--        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();--}}
{{--        (function(){--}}
{{--            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];--}}
{{--            s1.async=true;--}}
{{--            s1.src='https://embed.tawk.to/598736f0dbb01a218b4daf7c/default';--}}
{{--            s1.charset='UTF-8';--}}
{{--            s1.setAttribute('crossorigin','*');--}}
{{--            s0.parentNode.insertBefore(s1,s0);--}}
{{--        })();--}}
{{--    </script>--}}
{{--    <!--End of Tawk.to Script-->--}}



    <!-- Bootstrap JS -->
    <script type="text/javascript" src="{{url('vendor/bootstrap/bootstrap.min.js')}}"></script>

    <!-- Vendor js _________ -->
    <!-- Camera Slider -->
    <script type='text/javascript' src='{{url('vendor/Camera-master/scripts/jquery.mobile.customized.min.js')}}'></script>
    <script type='text/javascript' src='{{url('vendor/Camera-master/scripts/jquery.easing.1.3.js')}}'></script>
    <script type='text/javascript' src='{{url('vendor/Camera-master/scripts/camera.min.js')}}'></script>
    <!-- WOW js -->
    <script type="text/javascript" src="{{url('vendor/WOW-master/dist/wow.min.js')}}"></script>
    <!-- Tilt js -->
    <script type="text/javascript" src="{{url('vendor/tilt.js/src/tilt.jquery.js')}}"></script>
    <!-- Fancybox -->
    <script type="text/javascript" src="{{url('vendor/fancybox/dist/jquery.fancybox.min.js')}}"></script>
    <!-- Validation -->
    <script type="text/javascript" src="{{url('vendor/contact-form/validate.js')}}"></script>
    <script type="text/javascript" src="{{url('vendor/contact-form/jquery.form.js')}}"></script>

    <!-- owl.carousel -->
    <script type="text/javascript" src="{{url('vendor/owl-carousel/owl.carousel.min.js')}}"></script>

    <!-- Theme js -->
    <script type="text/javascript" src="{{url('js/theme.js')}}"></script>

</div> <!-- /.main-page-wrapper -->
</body>


</html>
