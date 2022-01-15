<?php use Carbon\Carbon; ?>
<!DOCTYPE html>
<html lang="en-gb" dir="ltr">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Terms | Dropster - A delivery service</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,800%7CWork+Sans:200,300%7CJosefin+Sans:100" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css" />
    <script src="js/uikit.min.js" defer></script>
    <script src="js/uikit-icons.min.js" defer></script>
    <link rel="icon" type="image/png" sizes="56x56" href="images/logo/logoo.png">
</head>

<body class="uk-background-primary uk-light">
@include('singlestyles')

<div data-uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">

    <nav class="uk-navbar-container uk-margin uk-light">
        <div class="uk-container">
            <div data-uk-navbar>
                <div class="uk-navbar-left">
                    <div><a href="{{url('/')}}"><img src="{{url('images/logo/logo3.png')}}" alt="Logo"></a></div>
                </div>
                <div class="uk-navbar-center uk-visible@m">


                </div>
                <div class="uk-navbar-right">
                    <ul class="uk-navbar-nav">
                        <li ><a href="{{url('/')}}">Home</a></li>
                        <li ><a href="{{url('earn')}}">Partner</a></li>
                        <li ><a href="{{url('pricing')}}">Pricing</a></li>
                        <li ><a href="https://dropsterng.com/app">Sign Up</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </nav>

</div>


<section class="tm-margin-large-top">
    <div class="uk-container uk-text-center">

        <p class="uk-margin-remove-bottom tm-overtitle uk-margin-top uk-text-uppercase letter-spacing-l">TERMS AND CONDITIONS</p>
        <h3 class="uk-article-title uk-margin-medium-bottom" style="color:#722393">Dropster's terms of service </h3>
        <p class="uk-margin-remove-bottom tm-overtitle uk-margin-top uk-text letter-spacing-l">Last Updated: {{Carbon::createFromFormat("Y-m-d H:i:s",$terms->created_at)->toDayDateTimeString()}}</p>
        <br>

    </div>
</section>

<section>
    <div class="uk-container">


        <p text-align="justify">Please read these Terms of Service ("Terms", "Terms of Service") carefully before using the http://dropsterng.com website and the DROPSTER mobile application (the "Service") operated <br>by GuruDeveloper Inc.<br><br>

            Your access to and use of the Service is conditioned on your acceptance  of and compliance <br> with these Terms. These Terms apply to all visitors, users and others who <br> access or use the Service.<br><br>

            By accessing or using the Service you agree to be bound by these Terms.<br> If you disagree with any part of the terms then you may not access the Service.</p>


    </div>
</section>

<section>
    <div class="uk-container" style="margin-bottom: 50px;">


        <ul class="uk-list uk-list-large uk-margin-medium-top">
            <li><a href="#article-1" data-uk-scroll="duration: 400; offset: 140" class="hvr-forward"><span data-uk-icon="icon: arrow-right"></span> Our terms</a></li>


        </ul>

        <article class="uk-article uk-margin-xlarge-top" >
            <h2 id="article-1" class="uk-article-title uk-margin-medium-bottom">TERMINATION<a href="#" data-uk-totop data-uk-scroll="duration: 400" class="tm-totop uk-float-right uk-margin-small-top"></a></h2>
            <p>
                {!! $terms->content !!}
            </p>
        </article>


    </div>
</section>

<footer class="uk-section tm-primary-color-dark uk-light uk-text-center">
    <div class="uk-container">

        <div>
            <ul class="uk-subnav uk-flex-center">
                <li class="uk-first-column"><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('faqs')}}">Faq</a></li>
                <li><a href="{{url('contact')}}">Contact</a></li>
                <li><a href="{{url('terms')}}">Terms</a></li>
                <li><a href="{{url('developers')}}">Developers</a></li>
            </ul>
        </div>
        <div class="uk-margin-medium">
            <div data-uk-grid class="uk-child-width-auto uk-grid-small uk-flex-center uk-grid">
                <div class="uk-first-column">
                    <a href="https://www.youtube.com/channel/UC14-kc9YplTVSmvFOA2b6pg" data-uk-icon="icon: youtube" class="uk-icon-link uk-icon"></a>
                </div>
                <div>
                    <a href="https://twitter.com/drospterng" data-uk-icon="icon: twitter" class="uk-icon-link uk-icon"></a>
                </div>
                <div>
                    <a href="https://www.instagram.com/dropsterng" data-uk-icon="icon: instagram" class="uk-icon-link uk-icon"></a>
                </div>
                <div>
                    <a href="https://www.facebook.com/dropsterng" data-uk-icon="icon: facebook" class="uk-icon-link uk-icon"></a>
                </div>
            </div>
        </div>
        <div class="uk-margin-medium tm-text-xsmall uk-text-meta copyright">Dropster by <a href="https://gurudeveloperinc.com/">GURUDEVELOPER INC.</a> </div>

    </div>
</footer>


<div id="search" class="uk-flex-top uk-background-primary uk-modal-search" data-uk-modal>

    <button class="uk-modal-close-full uk-close-large" type="button" data-uk-close></button>
    <div class="uk-modal-dialog uk-text-center uk-margin-auto-vertical uk-padding-large">

        <form class="uk-search uk-search-large uk-margin-auto">
            <input class="uk-search-input uk-text-center" type="search" placeholder="Search...">
        </form>

    </div>
</div>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/598736f0dbb01a218b4daf7c/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->

</body>



</html>
