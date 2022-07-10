<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="robots" content="noimageindex, noarchive">
        <meta name="mobile-web-app-capable" content="yes">

        <title>{{ config('app.name', 'Goldfish') }}</title>

        <meta property="og:site_name" content="{{ config('app.name', 'Goldfish') }}">
        <meta property="og:title" content="{{ config('app.name', 'Goldfish') }} Social Network">
        <meta property="og:type" content="article">
        <meta property="og:url" content="{{request()->url()}}">

        <!-- Favicon -->
        <link href="{{ asset('assets/images/favicon.png') }}" rel="icon" type="image/png">
        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/uikit.css') }}">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> 
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <!-- icons -->
        <link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}">
        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    </head>
    <body>
        <div id="wrapper">
            @include('layouts.components.header')
  
            @include('layouts.components.sidebar')
     
            <!-- contents -->
            <div class="main_content">
                <div class="mcontainer">
                    @yield('content')
                    <!-- Footer  -->
                </div>
            </div>
            
        </div>
        <!-- Wrapper / End -->
        @auth
            @include('posts.form')
            @include('layouts.components.boxes')
        @endauth
        
        <script>
            var token = '{{ Session::token() }}';
            var urlLike = '{{ route('like') }}';
        </script>
        <!-- For Night mode -->
        <script>
            (function (window, document, undefined) {
                'use strict';
                if (!('localStorage' in window)) return;
                var nightMode = localStorage.getItem('gmtNightMode');
                if (nightMode) {
                    document.documentElement.className += ' night-mode';
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
        <!-- Javascript -->
        
        <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="{{ asset('assets/js/tippy.all.min.js') }}"></script>
        <script src="{{ asset('assets/js/uikit.js') }}"></script>
        <script src="{{ asset('assets/js/simplebar.js') }}"></script>
        <script src="{{ asset('assets/js/custom.js') }}"></script>
        <script src="{{ asset('assets/js/like.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.2.3/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule="" src="https://unpkg.com/ionicons@5.2.3/dist/ionicons/ionicons.js"></script>
</body>
</html>   