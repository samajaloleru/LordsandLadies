<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="css/owl.carousel.css" rel="stylesheet">
        <link href="css/magnific-popup.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/style-responsive.css" rel="stylesheet">
        <link href="css/fontawesomepro.css">
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/vertical-rhythm.min.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/YTPlayer.css" rel="stylesheet">

        <title>{{config('app.name', 'LSAPP')}}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script>tinymce.init({selector:'textarea'});</script>
    </head>
    <body>
        <div class="page appear-animate" id="app">
            @include('inc.navbar')
            <div class="container">
                @include('inc.messages')
            </div>
            
            @yield('content')

            @include('inc.footer')
        </div>

        <!--   Core JS Files   -->
        <script src="js/jquery-1.11.2.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/SmoothScroll.js"></script>
        <script src="js/jquery.scrollTo.min.js"></script>
        <script src="js/jquery.localScroll.min.js"></script>
        <script src="js/jquery.viewport.js"></script>
        <script src="js/jquery.countTo.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/jquery.parallax-1.1.3.js"></script>
        <script src="js/jquery.fitvids.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/masonry.pkgd.min.js"></script>
        <script src="js/jquery.simple-text-rotator.min.js"></script>
        <script src="js/jquery.lazyload.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/all.js"></script>
        <script src="js/jquery.mb.YTPlayer.js"></script>
        <script src="js/contact-form.js"></script>
        
    </body>
</html>
