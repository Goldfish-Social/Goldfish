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
    <body class="bg-gray-100">
        
        <div class="lg:flex max-w-5xl min-h-screen mx-auto p-6 py-10">
            <div class="flex flex-col items-center lg: lg:flex-row lg:space-x-10">
    
                <div class="lg:mb-12 flex-1 lg:text-left text-center">
                    <img src="assets/images/logo.png" alt="" class="lg:mx-0 lg:w-52 mx-auto w-40">
                    <p class="font-medium lg:mx-0 md:text-2xl mt-6 mx-auto sm:w-3/4 text-xl"> Connect with friends and the world around you on Socialite.</p>
                </div>
                <div class="lg:mt-0 lg:w-96 md:w-1/2 sm:w-2/3 mt-10 w-full">
                    <form method="POST" action="{{ route('login') }}" class="p-6 space-y-4 relative bg-white shadow-lg rounded-lg"> 
                    @csrf
                        <input type="email" name="email" placeholder="Email" class="with-border @error('email') is-invalid @enderror" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input type="password" name="password" placeholder="Password" class="with-border @error('password') is-invalid @enderror">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <button type="submit" class="bg-blue-600 font-semibold p-3 rounded-md text-center text-white w-full">
                            Log In
                        </button>
                        <a href="{{ route('password.request') }}" class="text-blue-500 text-center block"> Forgot Password? </a>
                        <hr class="pb-3.5">
                        <div class="flex">
                            <a href="#register" type="button" class="bg-green-600 hover:bg-green-500 hover:text-white font-semibold py-3 px-5 rounded-md text-center text-white mx-auto" uk-toggle>
                                Create New Account
                            </a>
                        </div>
                    </form>
    
                    <div class="mt-8 text-center text-sm">Wanna know more <a href="{{ route('about') }}" class="font-semibold hover:underline"> about us? </a> </div>
                </div>
        
            </div>
        </div>
      
        <!-- This is the modal -->
        <div id="register" uk-modal>
            <div class="uk-modal-dialog uk-modal-body rounded-xl shadow-2xl p-0 lg:w-5/12">
                <button class="uk-modal-close-default p-3 bg-gray-100 rounded-full m-3" type="button" uk-close></button>
                <div class="border-b px-7 py-5">
                    <div class="lg:text-2xl text-xl font-semibold mb-1"> Sign Up</div>
                    <div class="text-base text-gray-600"> It’s quick and easy.</div>
                </div>
                <form method="POST" action="{{ route('register') }}" class="p-7 space-y-5">
                @csrf
                    <div class="grid lg:grid-cols-2 gap-5">
                        <input name="name" type="text" placeholder="Your name" class="with-border @error('name') is-invalid @enderror" required autocomplete="name">
                        <input name="username" type="text" placeholder="Username" class="with-border @error('username') is-invalid @enderror" required autocomplete="username">
                    </div>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input name="email" type="email" placeholder="Your email" class="with-border @error('email') is-invalid @enderror" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input name="password" type="password" placeholder="Password" class="with-border @error('password') is-invalid @enderror" required>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input name="password_confirmation" type="password" placeholder="Password again" class="with-border" required>

                    <div class="checkbox">
                        <input type="checkbox" id="chekcbox1" checked name="terms">
                        <label for="chekcbox1"><span class="checkbox-icon"></span> I agree to the</label>
                    </div>
                    <a href="/about/terms"> Terms and Conditions</a>

                    <div class="flex">
                        <button type="submit" class="bg-blue-600 font-semibold mx-auto px-10 py-3 rounded-md text-center text-white">
                            Get Started
                        </button>
                    </div>
                </form>
    
            </div>
        </div>


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
        <!-- Javascript -->
        <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('assets/js/tippy.all.min.js') }}"></script>
        <script src="{{ asset('assets/js/uikit.js') }}"></script>
        <script src="{{ asset('assets/js/simplebar.js') }}"></script>
        <script src="{{ asset('assets/js/custom.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.2.3/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule="" src="https://unpkg.com/ionicons@5.2.3/dist/ionicons/ionicons.js"></script>
    </body>
</html>