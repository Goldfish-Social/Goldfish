@extends('layouts.app')

@section('content')
<div class="container m-auto">

    <div class="flex justify-between items-baseline lg:mr-8  uk-visible@s">
        <h1 class="font-extrabold leading-none mb-6 lg:text-2xl text-lg text-gray-900 tracking-tight"> Stories </h1>
        <a href="#" class="text-blue-400 hover:text-blue-500"> See all</a>
    </div>

    <!-- users-->

    <div class="relative uk-visible@s" uk-slider="finite: true">

        <a class="-left-2 absolute bg-white bottom-1/2 flex items-center justify-center p-2 rounded-full shadow text-xl w-9 z-10 dark:bg-gray-800 dark:text-white"
            href="#" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i> </a>
        <a class="absolute bg-white bottom-1/2 flex items-center justify-center p-2 right-4 rounded-full shadow text-xl w-9 z-10 dark:bg-gray-800 dark:text-white"
            href="#" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>

        <div class="uk-slider-container pb-3 lg:mr-3">

            <ul class="uk-slider-items uk-grid uk-grid-small">

                <li>
                    <div
                        class="relative bg-gradient-to-tr from-yellow-600 to-pink-600 p-1 rounded-full transform -rotate-2 hover:rotate-3 transition hover:scale-105 m-1">
                        <img src="assets/images/avatars/avatar-2.jpg"
                            class="w-20 h-20 rounded-full border-2 border-white bg-gray-200">
                        <a href="#"
                            class=" bg-gray-400 p-2 rounded-full w-8 h-8 flex justify-center items-center text-white border-4 border-white absolute right-2 bottom-0 bg-blue-600">
                            + </a>
                    </div>
                    <a href="profile.html" class="block font-medium text-center text-gray-500 text-x truncate w-24">
                        You </a>
                </li>
                <li>
                    <a href="#story-view" uk-toggle>
                        <div
                            class="bg-gradient-to-tr from-yellow-600 to-pink-600 p-1 rounded-full transform -rotate-2 hover:rotate-3 transition hover:scale-105 m-1">
                            <img src="assets/images/avatars/avatar-1.jpg"
                                class="w-20 h-20 rounded-full border-2 border-white bg-gray-200">
                        </div>
                    </a>
                    <a href="profile.html" class="block font-medium text-center text-gray-500 text-x truncate w-24">
                        Dennis </a>
                </li>
                <li>
                    <a href="#story-view" uk-toggle>
                        <div
                            class="bg-gradient-to-tr from-yellow-600 to-pink-600 p-1 rounded-full transform -rotate-2 hover:rotate-3 transition hover:scale-105 m-1">
                            <img src="assets/images/avatars/avatar-3.jpg"
                                class="w-20 h-20 rounded-full border-2 border-white bg-gray-200">
                        </div>
                    </a>
                    <a href="profile.html" class="block font-medium text-center text-gray-500 text-x truncate w-24">
                        Jonathan </a>
                </li>
                <li>
                    <a href="#story-view" uk-toggle>
                        <div
                            class="bg-gradient-to-tr from-yellow-600 to-pink-600 p-1 rounded-full transform -rotate-2 hover:rotate-3 transition hover:scale-105 m-1">
                            <img src="assets/images/avatars/avatar-4.jpg"
                                class="w-20 h-20 rounded-full border-2 border-white bg-gray-200">
                        </div>
                    </a>
                    <a href="profile.html" class="block font-medium text-center text-gray-500 text-x truncate w-24">
                        Stella </a>
                </li>
                <li>
                    <a href="#story-view" uk-toggle>
                        <div
                            class="bg-gradient-to-tr from-yellow-600 to-pink-600 p-1 rounded-full transform -rotate-2 hover:rotate-3 transition hover:scale-105 m-1">
                            <img src="assets/images/avatars/avatar-5.jpg"
                                class="w-20 h-20 rounded-full border-2 border-white bg-gray-200">
                        </div>
                    </a>
                    </a>
                    <a href="profile.html" class="block font-medium text-center text-gray-500 text-x truncate w-24">
                        Alex </a>
                </li>
                <li>
                    <a href="#story-view" uk-toggle>
                        <div
                            class="bg-gradient-to-tr from-yellow-600 to-pink-600 p-1 rounded-full transform -rotate-2 hover:rotate-3 transition hover:scale-105 m-1">
                            <img src="assets/images/avatars/avatar-6.jpg"
                                class="w-20 h-20 rounded-full border-2 border-white bg-gray-200">
                        </div>
                        <a href="profile.html"
                            class="block font-medium text-center text-gray-500 text-x truncate w-24"> Adrian
                        </a>
                </li>
                <li>
                    <a href="#story-view" uk-toggle>
                        <div
                            class="bg-gradient-to-tr from-yellow-600 to-pink-600 p-1 rounded-full transform -rotate-2 hover:rotate-3 transition hover:scale-105 m-1">
                            <img src="assets/images/avatars/avatar-1.jpg"
                                class="w-20 h-20 rounded-full border-2 border-white bg-gray-200">
                        </div>
                    </a>
                    <a href="profile.html" class="block font-medium text-center text-gray-500 text-x truncate w-24">
                        Jonathan </a>
                </li>
                <li>
                    <a href="#story-view" uk-toggle>
                        <div
                            class="bg-gradient-to-tr from-yellow-600 to-pink-600 p-1 rounded-full transform -rotate-2 hover:rotate-3 transition hover:scale-105 m-1">
                            <img src="assets/images/avatars/avatar-2.jpg"
                                class="w-20 h-20 rounded-full border-2 border-white bg-gray-200">
                        </div>
                    </a>
                    <a href="profile.html" class="block font-medium text-center text-gray-500 text-x truncate w-24">
                        Dennis </a>
                </li>
                <li>
                    <a href="#story-view" uk-toggle>
                        <div
                            class="bg-gradient-to-tr from-yellow-600 to-pink-600 p-1 rounded-full transform -rotate-2 hover:rotate-3 transition hover:scale-105 m-1">
                            <img src="assets/images/avatars/avatar-3.jpg"
                                class="w-20 h-20 rounded-full border-2 border-white bg-gray-200">
                        </div>
                    </a>
                    <a href="profile.html" class="block font-medium text-center text-gray-500 text-x truncate w-24">
                        Stella </a>
                </li>
                <li>
                    <a href="#story-view" uk-toggle>
                        <div
                            class="bg-gradient-to-tr from-yellow-600 to-pink-600 p-1 rounded-full transform -rotate-2 hover:rotate-3 transition hover:scale-105 m-1">
                            <img src="assets/images/avatars/avatar-4.jpg"
                                class="w-20 h-20 rounded-full border-2 border-white bg-gray-200">
                        </div>
                    </a>
                    <a href="profile.html" class="block font-medium text-center text-gray-500 text-x truncate w-24">
                        Adrian </a>
                </li>
                <li>
                    <a href="#story-view" uk-toggle>
                        <div
                            class="bg-gradient-to-tr from-yellow-600 to-pink-600 p-1 rounded-full transform -rotate-2 hover:rotate-3 transition hover:scale-105 m-1">
                            <img src="assets/images/avatars/avatar-5.jpg"
                                class="w-20 h-20 rounded-full border-2 border-white bg-gray-200">
                        </div>
                    </a>
                    <a href="profile.html" class="block font-medium text-center text-gray-500 text-x truncate w-24">
                        Dennis </a>
                </li>
            </ul>

        </div>
    </div>

    <div class="flex justify-between items-baseline uk-visible@s">
        <h1 class="font-extrabold leading-none mb-6 mt-8 lg:text-2xl text-lg text-gray-900 tracking-tight"> Suggestion
        </h1>
        <a href="#" class="text-blue-400 hover:text-blue-500"> See all</a>
    </div>

    <div class="relative" uk-slider="finite: true">

        <div class="uk-slider-container pb-3 -ml-3">

            <ul
                class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-grid-small">
                <li>
                    <div class="bg-gray-200 max-w-full lg:h-64 h-52 rounded-lg relative overflow-hidden">
                        <a href="profile.html">
                            <img src="assets/images/post/img7.jpg"
                            class="w-full h-full absolute object-cover inset-0">
                        </a>
                        <a href="#" class="absolute right-3 top-3 bg-black bg-opacity-60 rounded-full"
                            data-tippy-placement="left" title="Hide">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="fill-current h-6 m-1.5 text-white w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </a>

                        <div class="absolute bottom-0 p-4 w-full custom-overly1">
                            <div class="flex justify-between align-bottom flex-wrap text-white">
                                <div class="w-full truncate text-lg"> John Michael </div>
                                <div class="leading-5 text-sm">
                                    <div> 21, Turkey </div>
                                   
                                </div>
                                <a href="#"
                                    class="absolute right-3 bottom-3 rounded-full bg-gradient-to-tr from-blue-500 to-purple-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor" class="fill-current h-6 m-1.5 text-white w-6">
                                        <path
                                            d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="bg-gray-200 max-w-full lg:h-64 h-52 rounded-lg relative overflow-hidden">
                        <a href="profile.html">
                            <img src="assets/images/avatars/avatar-6.jpg"
                                class="w-full h-full absolute object-cover inset-0">
                        </a> 
                        <a href="#" class="absolute right-3 top-3 bg-black bg-opacity-60 rounded-full"
                            data-tippy-placement="left" title="Hide">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="fill-current h-6 m-1.5 text-white w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </a>

                        <div class="absolute bottom-0 p-4 w-full custom-overly1">
                            <div class="flex justify-between align-bottom flex-wrap text-white">
                                <div class="w-full truncate text-lg"> Monroe Parker </div>
                                <div class="leading-5 text-sm">
                                    <div> 19, Austria </div>
                                   
                                </div>
                                <a href="#"
                                    class="absolute right-3 bottom-3 rounded-full bg-gradient-to-tr from-blue-500 to-purple-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor" class="fill-current h-6 m-1.5 text-white w-6">
                                        <path
                                            d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="bg-gray-200 max-w-full lg:h-64 h-52 rounded-lg relative overflow-hidden">
                        <a href="profile.html">
                            <img src="assets/images/avatars/avatar-4.jpg"
                                class="w-full h-full absolute object-cover inset-0">
                        </a>
                        <a href="#" class="absolute right-3 top-3 bg-black bg-opacity-60 rounded-full"
                            data-tippy-placement="left" title="Hide">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="fill-current h-6 m-1.5 text-white w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </a>

                        <div class="absolute bottom-0 p-4 w-full custom-overly1">
                            <div class="flex justify-between align-bottom flex-wrap text-white">
                                <div class="w-full truncate text-lg"> Martin Gray </div>
                                <div class="leading-5 text-sm">
                                    <div> 19, New York </div>
                                   
                                </div>
                                <a href="#"
                                    class="absolute right-3 bottom-3 rounded-full bg-gradient-to-tr from-blue-500 to-purple-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor" class="fill-current h-6 m-1.5 text-white w-6">
                                        <path
                                            d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="bg-gray-200 max-w-full lg:h-64 h-52 rounded-lg relative overflow-hidden">
                        <a href="profile.html">
                            <img src="assets/images/avatars/avatar-7.jpg"
                                class="w-full h-full absolute object-cover inset-0">
                        </a>
                        <a href="#" class="absolute right-3 top-3 bg-black bg-opacity-60 rounded-full"
                            data-tippy-placement="left" title="Hide">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="fill-current h-6 m-1.5 text-white w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </a>

                        <div class="absolute bottom-0 p-4 w-full custom-overly1">
                            <div class="flex justify-between align-bottom flex-wrap text-white">
                                <div class="w-full truncate text-lg"> Jesse Stevens</div>
                                <div class="leading-5 text-sm">
                                    <div> 19, London </div>
                                   
                                </div>
                                <a href="#"
                                    class="absolute right-3 bottom-3 rounded-full bg-gradient-to-tr from-blue-500 to-purple-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor" class="fill-current h-6 m-1.5 text-white w-6">
                                        <path
                                            d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>



                <li>
                    <div class="bg-gray-200 max-w-full lg:h-64 h-52 rounded-lg relative overflow-hidden">
                        <a href="profile.html">
                            <img src="assets/images/avatars/avatar-1.jpg"
                                class="w-full h-full absolute object-cover inset-0">
                        </a>
                        <a href="#" class="absolute right-3 top-3 bg-black bg-opacity-60 rounded-full"
                            data-tippy-placement="left" title="Hide">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="fill-current h-6 m-1.5 text-white w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </a>

                        <div class="absolute bottom-0 p-4 w-full custom-overly1">
                            <div class="flex justify-between align-bottom flex-wrap text-white">
                                <div class="w-full truncate text-lg"> James Lewis </div>
                                <div class="leading-5 text-sm">
                                    <div> 19, Austria </div>
                                   
                                </div>
                                <a href="#"
                                    class="absolute right-3 bottom-3 rounded-full bg-gradient-to-tr from-blue-500 to-purple-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor" class="fill-current h-6 m-1.5 text-white w-6">
                                        <path
                                            d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>

            <a class="uk-position-center-left uk-position-small p-3.5 bg-white rounded-full w-10 h-10 flex justify-center items-center -mx-4 mb-6 shadow-md dark:bg-gray-800 dark:text-white"
                href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-positsion-small p-3.5 bg-white rounded-full w-10 h-10 flex justify-center items-center -mx-4 shadow-md dark:bg-gray-800 dark:text-white"
                href="#" uk-slidenav-next uk-slider-item="next"></a>

        </div>

    </div>

    <h1 class="font-extrabold leading-none mb-6 mt-8 lg:text-2xl text-lg text-gray-900 tracking-tight"> Explore </h1>

    <div class="mt-6 grid lg:grid-cols-3 grid-cols-2 gap-3 hover:text-yellow-700 uk-link-reset">
        <div>
            <div
                class="bg-red-400 max-w-full lg:h-60 h-48 rounded-lg relative overflow-hidden shadow uk-transition-toggle">
                <a href="#story-modal" uk-toggle>
                    <img src="assets/images/post/img8.jpg"
                        class="w-full h-full absolute object-cover inset-0">
                </a>
                <a href="#story-modal" uk-toggle
                    class="absolute flex h-full items-center justify-center w-8 w-full uk-transition-scale-up bg-black bg-opacity-10">
                    <img src="assets/images/icon-play.svg" alt="" class="w-16 h-16 -mt-5">
                </a>
                <div
                    class="flex flex-1 items-center absolute bottom-0 w-full p-3 text-white custom-overly1 uk-transition-slide-bottom-medium">
                    <a href="profile.html" class="lg:flex flex-1 items-center hidden">
                        <div
                            class="bg-gradient-to-tr from-yellow-600 to-pink-600 p-1 rounded-full transform -rotate-2 hover:rotate-3 transition hover:scale-105 m-0.5 mr-2">
                            <img src="assets/images/avatars/avatar-2.jpg"
                                class="bg-gray-200 border border-white rounded-full w-8">
                        </div>
                        <div> James Lewis </div>
                    </a>
                    <div class="flex space-x-2 flex-1 lg:flex-initial justify-around">
                        <a href="#"> <i class="uil-heart"></i> 150 </a>
                        <a href="#"> <i class="uil-heart"></i> 30 </a>
                    </div>
                </div>

            </div>
        </div>

        <div>
            <div
                class="bg-green-400 max-w-full lg:h-72 h-48 rounded-lg relative overflow-hidden shadow uk-transition-toggle">
                <a href="#story-modal" uk-toggle>
                    <img src="assets/images/post/img2.jpg"
                        class="w-full h-full absolute object-cover inset-0">
                </a>
                <div
                    class="flex flex-1 items-center absolute bottom-0 w-full p-3 text-white custom-overly1 uk-transition-slide-bottom-medium">
                    <a href="profile.html" class="lg:flex flex-1 items-center hidden">
                        <div
                            class="bg-gradient-to-tr from-yellow-600 to-pink-600 p-1 rounded-full transform -rotate-2 hover:rotate-3 transition hover:scale-105 m-0.5 mr-2">
                            <img src="assets/images/avatars/avatar-2.jpg"
                                class="bg-gray-200 border border-white rounded-full w-8">
                        </div>
                        <div> James Lewis </div>
                    </a>
                    <div class="flex space-x-2 flex-1 lg:flex-initial justify-around">
                        <a href="#"> <i class="uil-heart"></i> 150 </a>
                        <a href="#"> <i class="uil-heart"></i> 30 </a>
                    </div>
                </div>

            </div>
        </div>

        <div>
            <div
                class="bg-yellow-400 max-w-full lg:h-60 h-48 rounded-lg relative overflow-hidden shadow uk-transition-toggle">
                <a href="#story-modal" uk-toggle>
                    <img src="assets/images/post/img3.jpg"
                        class="w-full h-full absolute object-cover inset-0">
                </a>
                <a href="#story-modal" uk-toggle
                    class="absolute flex h-full items-center justify-center w-8 w-full uk-transition-scale-up bg-black bg-opacity-10">
                    <img src="assets/images/icon-play.svg" alt="" class="w-16 h-16 -mt-5">
                </a>
                <div
                    class="flex flex-1 items-center absolute bottom-0 w-full p-3 text-white custom-overly1 uk-transition-slide-bottom-medium">
                    <a href="profile.html" class="lg:flex flex-1 items-center hidden">
                        <div
                            class="bg-gradient-to-tr from-yellow-600 to-pink-600 p-1 rounded-full transform -rotate-2 hover:rotate-3 transition hover:scale-105 m-0.5 mr-2">
                            <img src="assets/images/avatars/avatar-2.jpg"
                                class="bg-gray-200 border border-white rounded-full w-8">
                        </div>
                        <div> John Michael </div>
                    </a>
                    <div class="flex space-x-2 flex-1 lg:flex-initial justify-around">
                        <a href="#"> <i class="uil-heart"></i> 150 </a>
                        <a href="#"> <i class="uil-heart"></i> 30 </a>
                    </div>
                </div>

            </div>
        </div>

        <div>
            <div
                class="bg-pink-400 max-w-full lg:h-72 h-48 rounded-lg relative overflow-hidden shadow uk-transition-toggle lg:-mt-12">
                <a href="#story-modal" uk-toggle>
                    <img src="assets/images/post/img7.jpg"
                        class="w-full h-full absolute object-cover inset-0">
                </a>
                <div
                    class="flex flex-1 items-center absolute bottom-0 w-full p-3 text-white custom-overly1 uk-transition-slide-bottom-medium">
                    <a href="profile.html" class="lg:flex flex-1 items-center hidden">
                        <div
                            class="bg-gradient-to-tr from-yellow-600 to-pink-600 p-1 rounded-full transform -rotate-2 hover:rotate-3 transition hover:scale-105 m-0.5 mr-2">
                            <img src="assets/images/avatars/avatar-2.jpg"
                                class="bg-gray-200 border border-white rounded-full w-8">
                        </div>
                        <div> Monroe Parker </div>
                    </a>
                    <div class="flex space-x-2 flex-1 lg:flex-initial justify-around">
                        <a href="#"> <i class="uil-heart"></i> 150 </a>
                        <a href="#"> <i class="uil-heart"></i> 30 </a>
                    </div>
                </div>

            </div>
        </div>

        <div>
            <div
                class="bg-purple-400 max-w-full lg:h-60 h-48 rounded-lg relative overflow-hidden shadow uk-transition-toggle">
                <a href="#story-modal" uk-toggle>
                    <img src="assets/images/post/img5.jpg"
                        class="w-full h-full absolute object-cover inset-0">
                </a>
                <div
                    class="flex flex-1 items-center absolute bottom-0 w-full p-3 text-white custom-overly1 uk-transition-slide-bottom-medium">
                    <a href="profile.html" class="lg:flex flex-1 items-center hidden">
                        <div
                            class="bg-gradient-to-tr from-yellow-600 to-pink-600 p-1 rounded-full transform -rotate-2 hover:rotate-3 transition hover:scale-105 m-0.5 mr-2">
                            <img src="assets/images/avatars/avatar-2.jpg"
                                class="bg-gray-200 border border-white rounded-full w-8">
                        </div>
                        <div> Martin Gray </div>
                    </a>
                    <div class="flex space-x-2 flex-1 lg:flex-initial justify-around">
                        <a href="#"> <i class="uil-heart"></i> 150 </a>
                        <a href="#"> <i class="uil-heart"></i> 30 </a>
                    </div>
                </div>

            </div>
        </div>
        <div>
            <div
                class="bg-pink-400 max-w-full lg:h-72 h-48 rounded-lg relative overflow-hidden shadow uk-transition-toggle lg:-mt-12">
                <a href="#story-modal" uk-toggle>
                    <img src="assets/images/post/img1.jpg"
                        class="w-full h-full absolute object-cover inset-0">
                </a>
                <div
                    class="flex flex-1 items-center absolute bottom-0 w-full p-3 text-white custom-overly1 uk-transition-slide-bottom-medium">
                    <a href="profile.html" class="lg:flex flex-1 items-center hidden">
                        <div
                            class="bg-gradient-to-tr from-yellow-600 to-pink-600 p-1 rounded-full transform -rotate-2 hover:rotate-3 transition hover:scale-105 m-0.5 mr-2">
                            <img src="assets/images/avatars/avatar-2.jpg"
                                class="bg-gray-200 border border-white rounded-full w-8">
                        </div>
                        <div> Jesse Stevens </div>
                    </a>
                    <div class="flex space-x-2 flex-1 lg:flex-initial justify-around">
                        <a href="#"> <i class="uil-heart"></i> 150 </a>
                        <a href="#"> <i class="uil-heart"></i> 30 </a>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="my-3 grid lg:grid-cols-4 grid-cols-2 gap-3 hover:text-yellow-700 uk-link-reset">

        <div>
            <div
                class="bg-red-400 max-w-full lg:h-56 h-48 rounded-lg relative overflow-hidden shadow uk-transition-toggle">
                <a href="#story-modal" uk-toggle>
                    <img src="assets/images/post/img2.jpg" class="w-full h-full absolute object-cover inset-0 scale-150 transform">
                </a>
                <div
                    class="flex flex-1 items-center absolute bottom-0 w-full p-3 text-white custom-overly1 uk-transition-slide-bottom-medium">
                    <a href="profile.html" class="lg:flex flex-1 items-center hidden">
                        <div> James Lewis </div>
                    </a>
                    <div class="flex space-x-2 flex-1 lg:flex-initial justify-around">
                        <a href="#"> <i class="uil-heart"></i> 150 </a>
                        <a href="#"> <i class="uil-heart"></i> 30 </a>
                    </div>
                </div>

            </div>
        </div>
        <div>
            <div
                class="bg-yellow-400 max-w-full lg:h-56 h-48 rounded-lg relative overflow-hidden shadow uk-transition-toggle">
                <a href="#story-modal" uk-toggle>
                    <img src="assets/images/post/img6.jpg" class="w-full h-full absolute object-cover inset-0 scale-150 transform">
                </a>
                <div
                    class="flex flex-1 items-center absolute bottom-0 w-full p-3 text-white custom-overly1 uk-transition-slide-bottom-medium">
                    <a href="#" class="lg:flex flex-1 items-center hidden">
                        <div> James Lewis </div>
                    </a>
                    <div class="flex space-x-2 flex-1 lg:flex-initial justify-around">
                        <a href="#"> <i class="uil-heart"></i> 150 </a>
                        <a href="#"> <i class="uil-heart"></i> 30 </a>
                    </div>
                </div>

            </div>
        </div>
        <div>
            <div
                class="bg-green-400 max-w-full lg:h-56 h-48 rounded-lg relative overflow-hidden shadow uk-transition-toggle">
                <a href="#story-modal" uk-toggle>
                    <img src="assets/images/avatars/avatar-1.jpg" class="w-full h-full absolute object-cover inset-0">
                </a>
                <div
                    class="flex flex-1 items-center absolute bottom-0 w-full p-3 text-white custom-overly1 uk-transition-slide-bottom-medium">
                    <a href="#" class="lg:flex flex-1 items-center hidden">
                        <div> James Lewis </div>
                    </a>
                    <div class="flex space-x-2 flex-1 lg:flex-initial justify-around">
                        <a href="#"> <i class="uil-heart"></i> 150 </a>
                        <a href="#"> <i class="uil-heart"></i> 30 </a>
                    </div>
                </div>

            </div>
        </div>
        <div>
            <div
                class="bg-blue-400 max-w-full lg:h-56 h-48 rounded-lg relative overflow-hidden shadow uk-transition-toggle">
                <a href="#story-modal" uk-toggle>
                    <img src="assets/images/post/img7.jpg" class="w-full h-full absolute object-cover inset-0">
                </a>
                <div
                    class="flex flex-1 items-center absolute bottom-0 w-full p-3 text-white custom-overly1 uk-transition-slide-bottom-medium">
                    <a href="#" class="lg:flex flex-1 items-center hidden">
                        <div> James Lewis </div>
                    </a>
                    <div class="flex space-x-2 flex-1 lg:flex-initial justify-around">
                        <a href="#"> <i class="uil-heart"></i> 150 </a>
                        <a href="#"> <i class="uil-heart"></i> 30 </a>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- Load more-->
    <div class="flex justify-center mt-6">
        <a href="#" class="bg-white font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white"> Load more ..</a>
    </div>


</div>
@endsection