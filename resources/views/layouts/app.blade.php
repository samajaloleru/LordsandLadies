<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/style-responsive.css')}}">
        <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/vertical-rhythm.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="css/YTPlayer.css">
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
        <script src="{{ asset('js/jquery-1.11.2.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/jquery.easing.1.3.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/SmoothScroll.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/jquery.scrollTo.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/jquery.localScroll.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/jquery.viewport.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/jquery.countTo.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/jquery.appear.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/jquery.sticky.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/jquery.parallax-1.1.3.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/jquery.fitvids.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/owl.carousel.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/isotope.pkgd.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/imagesloaded.pkgd.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/jquery.magnific-popup.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/wow.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/masonry.pkgd.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/jquery.simple-text-rotator.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/jquery.lazyload.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/jquery.ajaxchimp.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/all.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/jquery.mb.YTPlayer.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/contact-form.js')}}" type="text/javascript"></script>
    </body>
</html>
