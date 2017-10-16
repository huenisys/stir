<!doctype html>
<html lang="en">
    <head>
        <base href="@yield('base_href')" target="_top">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Website</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @stack('metas')
        <link href="{{mix('/css/app-stir.css')}}" rel="stylesheet" type="text/css">
        <link href="{{mix('/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
        <style>
            @stack('styles')
        </style>
    </head>
    <body>

        <a id="skippy" class="sr-only sr-only-focusable" href="#content">
          <div class="container">
            <span class="skiplink-text">Skip to main content</span>
          </div>
        </a>

        @section('body')


        @include('stir::layout.navbarGuest')

        <style>
             @stack('styles')
        </style>

        @include('stir::layout.carousel')

        <div class="container">
            <div class="row">
                <div class="col4">
                    <a href="https://www.klevermedia.co.uk/html_templates/movie_star_html/"></a>
                </div>
                <div class="col8">



                </div>
            </div>
        </div>

        @show

        <script type="text/javascript" src="{{mix('/js/manifest.js')}}"></script>
        <script type="text/javascript" src="{{mix('/js/vendor.js')}}"></script>
        @stack('scripts')

    </body>
</html>
