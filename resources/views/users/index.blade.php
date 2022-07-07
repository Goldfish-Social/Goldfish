@extends('layouts.app')

@section('content')
<script src="{{ asset('assets/js/follow.js') }}" defer></script>

<div class="mcontainer">

    <div class="sm:my-6 my-3 flex items-center justify-between border-b pb-3">
        <div>
            <h2 class="text-xl font-semibold"> Categories </h2>
            <p class="font-medium text-gray-500 leading-6"> Find a group by browsing top categories. </p>
        </div>
        <a href="#" class="text-blue-500 sm:block hidden"> See all </a>
    </div> 

    <div class="relative -mt-3" uk-slider="finite: true">
    
        <div class="uk-slider-container px-1 py-3">
            <ul class="uk-slider-items uk-child-width-1-5@m uk-child-width-1-3@s uk-child-width-1-2 uk-grid-small uk-grid">
    
                <li>
                    <div class="rounded-md overflow-hidden relative w-full h-36">
                        <div class="absolute w-full h-3/4 -bottom-12 bg-gradient-to-b from-transparent to-gray-800 z-10">
                        </div>
                        <img src="assets/images/category/travel.jpg" class="absolute w-full h-full object-cover" alt="">
                        <div class="absolute bottom-0 w-full p-3 text-white z-20 font-semibold text-lg"> Travel </div>
                    </div>
                </li>
                <li>
                    <div class="rounded-md overflow-hidden relative w-full h-36">
                        <div class="absolute w-full h-3/4 -bottom-12 bg-gradient-to-b from-transparent to-gray-800 z-10">
                        </div>
                        <img src="assets/images/category/business.jpg" class="absolute w-full h-full object-cover" alt="">
                        <div class="absolute bottom-0 w-full p-3 text-white z-20 font-semibold text-lg"> Business </div>
                    </div>
                </li>
                <li>
                    <div class="rounded-md overflow-hidden relative w-full h-36">
                        <div class="absolute w-full h-3/4 -bottom-12 bg-gradient-to-b from-transparent to-gray-800 z-10">
                        </div>
                        <img src="assets/images/category/health.jpg" class="absolute w-full h-full object-cover" alt="">
                        <div class="absolute bottom-0 w-full p-3 text-white z-20 font-semibold text-lg"> Health </div>
                    </div>
                </li>
                <li>
                    <div class="rounded-md overflow-hidden relative w-full h-36">
                        <div class="absolute w-full h-3/4 -bottom-12 bg-gradient-to-b from-transparent to-gray-800 z-10">
                        </div>
                        <img src="assets/images/category/science-and-tech.jpg" class="absolute w-full h-full object-cover"
                            alt="">
                        <div class="absolute bottom-0 w-full p-3 text-white z-20 font-semibold text-lg"> Science </div>
                    </div>
                </li>
                <li>
                    <div class="rounded-md overflow-hidden relative w-full h-36">
                        <div class="absolute w-full h-3/4 -bottom-12 bg-gradient-to-b from-transparent to-gray-800 z-10">
                        </div>
                        <img src="assets/images/category/Buy-and-sell.jpg" class="absolute w-full h-full object-cover"
                            alt="">
                        <div class="absolute bottom-0 w-full p-3 text-white z-20 font-semibold text-lg"> Buy & sell</div>
                    </div>
                </li>
                <li>
                    <div class="rounded-md overflow-hidden relative w-full h-36">
                        <div class="absolute w-full h-3/4 -bottom-12 bg-gradient-to-b from-transparent to-gray-800 z-10">
                        </div>
                        <img src="assets/images/category/travel.jpg" class="absolute w-full h-full object-cover" alt="">
                        <div class="absolute bottom-0 w-full p-3 text-white z-20 font-semibold text-lg"> Travel </div>
                    </div>
                </li>
    
            </ul>
        </div>
        
        <a class="absolute bg-white top-16 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i></a>
        <a class="absolute bg-white top-16 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>

    </div>

    <br>  

    <div class="my-6 flex items-center justify-between border-b pb-3">
        <div>
            <h2 class="text-xl font-semibold"> Suggestions  </h2>
            <p class="font-medium text-gray-500 leading-6"> Find a groups You Might Be Interested In. </p>
        </div>
        <a href="#" class="text-blue-500 sm:block hidden"> See all </a>
    </div> 

    <div class="grid md:grid-cols-2 divide divide-gray-200 gap-x-6 gap-y-4">

        @include('users.list', ['users'=>$users])

    </div>
    

</div>
@endsection