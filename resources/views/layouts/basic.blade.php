<!DOCTYPE html>
<html lang="en-gb" dir="ltr">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dropster </title>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,800%7CWork+Sans:200,300%7CJosefin+Sans:100" rel="stylesheet">
    <link rel="stylesheet" href="{{url('css/main.css')}}" />
    <script src="{{url('js/uikit.min.js')}}" defer></script>
    <script src="{{url('js/uikit-icons.min.js')}}" defer></script>
    <link rel="icon" type="image/png" sizes="56x56" href="{{url('images/logo/logoo.png')}}">
</head>

<body class="uk-background-primary uk-light">

@yield('contact')
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
                    <a href="#" data-uk-icon="icon: youtube" class="uk-icon-link uk-icon"></a>
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
        <div class="uk-margin-medium tm-text-xsmall uk-text-meta copyright">Dropster <a href="https://dropsterng.com/">a subsidiary of </a> GURUDEVELOPERINC</div>

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


<div id="offcanvas" data-uk-offcanvas="flip: true; overlay: true">
    <div class="uk-offcanvas-bar">

        <button class="uk-offcanvas-close" type="button" data-uk-close></button>

        <ul class="uk-nav uk-nav-default">
            <li class="uk-nav-header uk-logo">Dropster</li>
            <li class="uk-parent">
                <a href="{{url('/')}}">Home</a>

            </li>
            <li ><a href="{{url('faqs')}}">Faq</a></li>
            <li ><a href="changelog.html">Changelog</a></li>
            <li ><a href="download.html">Download</a></li>
            <li ><a href="contact.html">Contact</a></li>
        </ul>

    </div>
</div>


</body>



</html>
