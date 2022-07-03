<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="robots" content="noimageindex, noarchive">
        <meta name="mobile-web-app-capable" content="yes">

        <title>{{ config('app.name', 'Goldfish') }}</title>

        <meta property="og:site_name" content="{{ config('app.name', 'Goldfish') }}">
        <meta property="og:title" content="{{ config('app.name', 'Goldfish') }} Social Network">
        <meta property="og:type" content="article">
        <meta property="og:url" content="{{request()->url()}}">

        <!-- Favicon -->
        <link href="{{ asset('assets/images/favicon.png') }}" rel="icon" type="image/png">
        <link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}">
        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/uikit.cs') }}s">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}">
        <style>
            @media (min-width: 1024px) {
                .container {
                    max-width: 950px !important;
                    padding-top: 30px !important;
                }
            }
        </style>

        <script src="//unpkg.com/alpinejs" defer></script>
    </head>
    <body>
        <!-- Wrapper -->
        <div id="wrapper">
            @include('layouts.components.sidebar')

            <div class="main_content">
                @include('layouts.components.header')
                <div class="container m-auto">
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- End Wrapper -->

        <x-flash-message />

        <script>
            (function (window, document, undefined) {
                'use strict';
                if (!('localStorage' in window)) return;
                var nightMode = localStorage.getItem('gmtNightMode');
                if (nightMode) {
                    document.documentElement.className += ' dark';
                }
            })(window, document);
        
        
            (function (window, document, undefined) {
        
                'use strict';
        
                // Feature test
                if (!('localStorage' in window)) return;
        
                // Get our newly insert toggle
                var nightMode = document.querySelector('#night-mode');
                if (!nightMode) return;
        
                // When clicked, toggle night mode on or off
                nightMode.addEventListener('click', function (event) {
                    event.preventDefault();
                    document.documentElement.classList.toggle('dark');
                    if (document.documentElement.classList.contains('dark')) {
                        localStorage.setItem('gmtNightMode', true);
                        return;
                    }
                    localStorage.removeItem('gmtNightMode');
                }, false);
        
            })(window, document);
        </script>
        <!-- Scripts -->
        <script src="{{ asset('assets/js/tippy.all.min.js') }}"></script>  
        <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('assets/js/uikit.js') }}"></script>
        <script src="{{ asset('assets/js/simplebar.js') }}"></script>
        <script src="{{ asset('assets/js/custom.js') }}"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>