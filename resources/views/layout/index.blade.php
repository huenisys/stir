<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <base href="@yield('base_href')" target="_top">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>@yield('html_title', 'Home')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @stack('metas')
        <link href="{{mix('/css/app-stir.css')}}" rel="stylesheet" type="text/css">
        <link href="{{mix('/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
        <style>
            @stack('styles')
        </style>
    </head>
    <body x-app-env="{{ $app_env }}" x-subdomain="{{ $subdomain }}" class="@stack('body-class')">
        @section('masthead')
        	@include('stir::layout.navbar.index')
        @show

        @section('body')
					<div class="container-fluid body-fluid-wrap">
						@yield('body-fluid')
					</div>
					<div class="container body-container-wrap">
						@yield('body-container')
					</div>
        @show

        @section('footer')
        	@include('stir::layout.footer')
        @show

        <script type="text/javascript" src="{{mix('/js/manifest.js')}}"></script>
        <script type="text/javascript" src="{{mix('/js/vendor.js')}}"></script>
        @stack('scripts')

    </body>
</html>
