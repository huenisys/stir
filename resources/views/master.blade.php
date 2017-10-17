<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>@yield('title', 'Home') | {{ $site_brand }}</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @stack('metas')
        <link href="{{mix('css/app-stir.css')}}" rel="stylesheet" type="text/css">
        <link href="{{mix('css/font-awesome.css')}}" rel="stylesheet" type="text/css">
        <style>
            @stack('styles')
        </style>

    </head>
    <body x-app-env="{{ $app_env }}" x-subdomain="{{ $subdomain }}">
        @include('stir::master._navbar')
        @section('body')
            <div class="container" id="body-container">
                @yield('body-container')
            </div><!-- /#body-container.container -->
            <div class="container-fluid" id="body-container-fluid">
                @yield('body-container-fluid')
            </div><!-- /#body-container-fluid.container-fluid -->
        @show

        @section('footer')
            <div class="fixed-bottom pt-3" style="background:#f5f5f5">
                <div class="container-fluid">
                    @include('stir::master._footer')
                </div>
            </div>
        @show

        <script type="text/javascript" src="{{asset('js/manifest.js')}}"></script>
        <script type="text/javascript" src="{{mix('js/vendor.js')}}"></script>
        <script type="text/javascript" src="{{mix('js/app-stir-guest.js')}}"></script>
        @stack('scripts')
    </body>
</html>
