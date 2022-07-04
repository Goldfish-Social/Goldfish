@extends('layouts.app')

@section('content')
<div class="mcontainer">

    <div class="lg:flex lg:space-x-10">

        <div class="lg:w-2/3">
            <div class="flex justify-between items-center relative md:mb-4 mb-3">
                <div class="flex-1">
                    <h2 class="text-2xl font-semibold"> Pages </h2>
                    <nav class="responsive-nav border-b md:m-0 -mx-4">
                        <ul>
                            <li class="active"><a href="#" class="lg:px-2">   Suggestions </a></li>
                            <li><a href="#" class="lg:px-2"> Newest </a></li>
                            <li><a href="#" class="lg:px-2"> My pages</a></li>
                        </ul>
                    </nav>
                </div>
                <a href="create-page.html" class="flex items-center justify-center h-10 w-10 z-10 rounded-full bg-blue-600 text-white absolute right-0"
                data-tippy-placement="left" title="Create New Page">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                </a>
            </div>

            <div class="relative" uk-slider="finite: true">
                <div class="uk-slider-container px-1 py-3">
                    <ul class="uk-slider-items uk-child-width-1-3@m uk-child-width-1-3@s uk-child-width-1-2 uk-grid-small uk-grid">

                        <li>
                            <a href="timeline-page.html" class="uk-link-reset">
                                <div class="card">
                                    <img src="assets/images/avatars/avatar-1.jpg" class="h-44 object-cover rounded-t-md shadow-sm w-full">
                                    <div class="p-4">
                                        <h4 class="text-base font-semibold mb-1"> James Lewis </h4>
                                        <p class="font-medium text-sm">843K Following
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="timeline-page.html">
                                <div class="card">
                                    <img src="assets/images/avatars/avatar-7.jpg" class="h-44 object-cover rounded-t-md shadow-sm w-full">
                                    <div class="p-4">
                                        <h4 class="text-base font-semibold mb-1">John Michael </h4>
                                        <p class="font-medium text-sm">843K Following </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="timeline-page.html">
                                <div class="card">
                                    <img src="assets/images/avatars/avatar-3.jpg" class="h-44 object-cover rounded-t-md shadow-sm w-full">
                                    <div class="p-4">
                                        <h4 class="text-base font-semibold mb-1"> Monroe Parker </h4>
                                        <p class="font-medium text-sm">843K Following </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="timeline-page.html">
                                <div class="card">
                                    <img src="assets/images/avatars/avatar-4.jpg" class="h-44 object-cover rounded-t-md shadow-sm w-full">
                                    <div class="p-4">
                                        <h4 class="text-base font-semibold mb-1"> Martin Gray </h4>
                                        <p class="font-medium text-sm">843K Following </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="timeline-page.html">
                                <div class="card">
                                    <img src="assets/images/avatars/avatar-5.jpg" class="h-44 object-cover rounded-t-md shadow-sm w-full">
                                    <div class="p-4">
                                        <h4 class="text-base font-semibold mb-1">Jesse Stevens </h4>
                                        <p class="font-medium text-sm">843K Following </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>

                    <a class="absolute bg-white bottom-1/2 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white"
                        href="#" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i></a>
                    <a class="absolute bg-white bottom-1/2 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white"
                        href="#" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>

                </div>
            </div>

            <br>

            <div class="my-2 flex items-center justify-between pb-3">
               <div>
                   <h2 class="text-xl font-semibold"> Your Friends also following</h2>
               </div>
               <a href="#" class="text-blue-500"> See all </a>
            </div>

            <div class="relative" uk-slider="finite: true">
                <div class="uk-slider-container px-1 py-3">
                    <ul class="uk-slider-items uk-child-width-1-3@m uk-child-width-1-3@s uk-child-width-1-2 uk-grid-small uk-grid">
                        <li>
                            <a href="timeline-page.html" class="uk-link-reset">
                                <div class="card">
                                    <img src="assets/images/avatars/avatar-6.jpg" class="h-44 object-cover rounded-t-md shadow-sm w-full">
                                    <div class="p-4">
                                        <h4 class="text-base font-semibold mb-1"> James Lewis </h4>
                                        <p class="font-medium text-sm">843K Following </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="timeline-page.html">
                                <div class="card">
                                    <img src="assets/images/avatars/avatar-4.jpg" class="h-44 object-cover rounded-t-md shadow-sm w-full">
                                    <div class="p-4">
                                        <h4 class="text-base font-semibold mb-1"> Martin Gray </h4>
                                        <p class="font-medium text-sm">843K Following  </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="timeline-page.html">
                                <div class="card">
                                    <img src="assets/images/avatars/avatar-7.jpg" class="h-44 object-cover rounded-t-md shadow-sm w-full">
                                    <div class="p-4">
                                        <h4 class="text-base font-semibold mb-1">John Michael </h4>
                                        <p class="font-medium text-sm">843K Following </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="timeline-page.html">
                                <div class="card">
                                    <img src="assets/images/avatars/avatar-5.jpg" class="h-44 object-cover rounded-t-md shadow-sm w-full">
                                    <div class="p-4">
                                        <h4 class="text-base font-semibold mb-1">Jesse Stevens </h4>
                                        <p class="font-medium text-sm">843K Following </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="timeline-page.html">
                                <div class="card">
                                    <img src="assets/images/avatars/avatar-3.jpg" class="h-44 object-cover rounded-t-md shadow-sm w-full">
                                    <div class="p-4">
                                        <h4 class="text-base font-semibold mb-1"> Monroe Parker </h4>
                                        <p class="font-medium text-sm">843K Following </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    
                    </ul>

                    <a class="absolute bg-white bottom-1/2 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white"
                        href="#" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i></a>
                    <a class="absolute bg-white bottom-1/2 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white"
                        href="#" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>

                </div>
            </div>


        </div>

        <!-- Sidebar -->
        <div class="lg:w-1/3 w-full">
            <div uk-sticky="media @m ; offset:80 ; bottom : true" class="card">
            
            
                <div class="border-b flex items-center justify-between p-4">
                    <div>
                        <h2 class="text-lg font-semibold">Top Pages</h2>
                    </div>
                    <a href="#" class="text-blue-500"> See all </a>
                </div>
            
                <div class="p-4 -mt-1.5">
            
                    <div class="flex items-center space-x-4 rounded-md -mx-2 p-2 hover:bg-gray-50">
                        <a href="timeline-page.html" href="timeline-page.html"iv class="w-12 h-12 flex-shrink-0 overflow-hidden rounded-full relative">
                            <img src="assets/images/avatars/avatar-1.jpg" class="absolute w-full h-full inset-0 " alt="">
                        </a>
                        <div class="flex-1">
                            <a href="timeline-page.html" class="text-base font-semibold capitalize"> Stella Johnson </a>
                            <div class="text-sm text-gray-500 mt-0.5"> 845K Following</div>
                        </div>
                        <a href="timeline-page.html"
                            class="flex items-center justify-center h-8 px-3 rounded-md text-sm border font-semibold">
                            Follow
                        </a>
                    </div>
                    <div class="flex items-center space-x-4 rounded-md -mx-2 p-2 hover:bg-gray-50">
                        <a href="timeline-page.html" class="w-12 h-12 flex-shrink-0 overflow-hidden rounded-full relative">
                            <img src="assets/images/avatars/avatar-2.jpg" class="absolute w-full h-full inset-0 " alt="">
                        </a>
                        <div class="flex-1">
                            <a href="timeline-page.html" class="text-base font-semibold capitalize"> Alex Dolgove </a>
                            <div class="text-sm text-gray-500 mt-0.5"> 356k Following </div>
                        </div>
                        <a href="timeline-page.html"
                            class="flex items-center justify-center h-8 px-3 rounded-md text-sm border font-semibold">
                            Follow
                        </a>
                    </div>
                    <div class="flex items-center space-x-4 rounded-md -mx-2 p-2 hover:bg-gray-50">
                        <a href="timeline-page.html" class="w-12 h-12 flex-shrink-0 overflow-hidden rounded-full relative">
                            <img src="assets/images/avatars/avatar-3.jpg" class="absolute w-full h-full inset-0" alt="">
                        </a>
                        <div class="flex-1">
                            <a href="timeline-page.html" class="text-base font-semibold capitalize"> John Michael </a>
                            <div class="text-sm text-gray-500 mt-0.5"> 845K Following</div>
                        </div>
                        <a href="timeline-page.html"
                            class="flex items-center justify-center h-8 px-3 rounded-md text-sm border font-semibold">
                            Follow
                        </a>
                    </div>
                    <div class="flex items-center space-x-4 rounded-md -mx-2 p-2 hover:bg-gray-50">
                        <a href="timeline-page.html" class="w-12 h-12 flex-shrink-0 overflow-hidden rounded-full relative">
                            <img src="assets/images/avatars/avatar-4.jpg" class="absolute w-full h-full inset-0" alt="">
                        </a>
                        <div class="flex-1">
                            <a href="timeline-page.html" class="text-base font-semibold capitalize"> Dennis Han </a>
                            <div class="text-sm text-gray-500 mt-0.5"> 845K Following</div>
                        </div>
                        <a href="timeline-page.html"
                            class="flex items-center justify-center h-8 px-3 rounded-md text-sm border font-semibold">
                            Follow
                        </a>
                    </div>
                    <div class="flex items-center space-x-4 rounded-md -mx-2 p-2 hover:bg-gray-50">
                        <a href="timeline-page.html" class="w-12 h-12 flex-shrink-0 overflow-hidden rounded-full relative">
                            <img src="assets/images/avatars/avatar-5.jpg" class="absolute w-full h-full inset-0" alt="">
                        </a>
                        <div class="flex-1">
                            <a href="timeline-page.html" class="text-base font-semibold capitalize"> Martin Gray </a>
                            <div class="text-sm text-gray-500 mt-0.5"> 845K Following</div>
                        </div>
                        <a href="timeline-page.html"
                            class="flex items-center justify-center h-8 px-3 rounded-md text-sm border font-semibold">
                            Follow
                        </a>
                    </div>
                    <div class="flex items-center space-x-4 rounded-md -mx-2 p-2 hover:bg-gray-50">
                        <a href="timeline-page.html" class="w-12 h-12 flex-shrink-0 overflow-hidden rounded-full relative">
                            <img src="assets/images/avatars/avatar-6.jpg" class="absolute w-full h-full inset-0" alt="">
                        </a>
                        <div class="flex-1">
                            <a href="timeline-page.html" class="text-base  font-semibold capitalize"> Erica Jones </a>
                            <div class="text-sm text-gray-500 mt-0.5"> 845K Following</div>
                        </div>
                        <a href="timeline-page.html"
                            class="flex items-center justify-center h-8 px-3 rounded-md text-sm border font-semibold">
                            Follow
                        </a>
                    </div>
            
                </div>
            
                <a href="#" class="block text-center pb-4 font-medium text-blue-500"> See all </a>
            
            </div>
        </div>

    </div>


</div>
@endsection