<!-- header-->
<div class="bg-white py-4 shadow dark:bg-gray-800">
    <div class="max-w-6xl mx-auto">


        <div class="flex items-center lg:justify-between justify-around">

            <a href="/">
                <img src="{{asset ('assets/images/logo.png') }}" alt="Goldfish" class="max-h-11">
                <img src="{{asset ('assets/images/logo.png') }}" class="logo_mobile" alt="">
            </a>
            
            <div class="capitalize flex font-semibold hidden lg:block my-2 space-x-3 text-center text-sm">
            @auth
                <a href="{{ route('home') }}" class="bg-purple-500 purple-500 px-6 py-3 rounded-md shadow text-white">Back</a>
            @else
                <a href="{{ route('login') }}" class="py-3 px-4">Login</a>
                <a href="{{ route('register') }}" class="bg-purple-500 purple-500 px-6 py-3 rounded-md shadow text-white">Register</a>
            @endauth
            </div>

        </div>
    </div>
</div>