@extends('layouts.app')

@section('content')
<div class="mcontainer">


    <div class="flex justify-between relative md:mb-4 mb-3">
        <div class="flex-1">
            <h2 class="text-2xl font-semibold"> Groups </h2>
            <nav class="responsive-nav border-b md:m-0 -mx-4">
                <ul>
                    <li class="active"><a href="#" class="lg:px-2">   Suggestions </a></li>
                    <li><a href="#" class="lg:px-2"> Newest </a></li>
                    <li><a href="#" class="lg:px-2"> My group </a></li>
                </ul>
            </nav>
        </div>
        <a href="create-group.html" class="flex items-center justify-center h-9 lg:px-5 px-2 rounded-md bg-blue-600 text-white space-x-1.5 absolute right-0">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="md:block hidden"> Create </span>
        </a> 
    </div>
   
    <div class="relative" uk-slider="finite: true">
    
        <div class="uk-slider-container px-1 py-3">
            <ul class="uk-slider-items uk-child-width-1-4@m uk-child-width-1-3@s uk-grid-small uk-grid">
            
                <li>
                    <div class="card">
                        <div class="card-media h-28">
                            <div class="card-media-overly"></div>
                            <img src="assets/images/group/group-cover-1.jpg" alt="" class="">

                            <div class="absolute bg-red-100 font-semibold px-2.5 py-1 rounded-lg text-red-500 text-xs top-2.5 left-2.5"> Trend </div>
                        </div>
                        <div class="card-body">
                            <a href="timeline-group.html" class="font-semibold text-lg truncate"> Graphic Design </a>
                            <div class="flex items-center flex-wrap space-x-1 mt-1 text-sm text-gray-500 capitalize">
                                <a href="#"> <span> 232k members </span> </a>
                                <a href="#"> <span> 1.7k post a day </span> </a>
                            </div>  
                            <div class="flex mt-3.5 space-x-2">
                                <div class="flex items-center -space-x-2 -mt-1">
                                    <img alt="Image placeholder" src="assets/images/avatars/avatar-6.jpg" class="border-2 border-white rounded-full w-7">
                                    <img alt="Image placeholder" src="assets/images/avatars/avatar-5.jpg" class="border-2 border-white rounded-full w-7">
                                </div>
                                <div class="flex-1 leading-5 text-sm">
                                    <div> <strong>Johnson</strong> and 5 freind are members </div>
                                </div>
                            </div>

                            <div class="flex mt-3.5 space-x-2 text-sm font-medium">
                                <a href="#" class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize"> 
                                    Join 
                                </a>
                                <a href="#" class="bg-gray-200 flex flex-1 h-8 items-center justify-center rounded-md capitalize"> 
                                    View 
                                </a>
                            </div>    

                        </div>
                    </div>
                </li>
                <li>
                    <div class="card">
                        <div class="card-media h-28">
                            <div class="card-media-overly"></div>
                            <img src="assets/images/group/group-cover-2.jpg" alt="" class="">
                        </div>
                        <div class="card-body">
                            <a href="timeline-group.html" class="font-semibold text-lg truncate">  Delicious Foods </a>
                            <div class="flex items-center flex-wrap space-x-1 mt-1 text-sm text-gray-500 capitalize">
                                <a href="#"> <span> 232k members </span> </a>
                                <a href="#"> <span> 1.7k post a day </span> </a>
                            </div>    

                            <div class="flex mt-3.5 space-x-2">
                                <div class="flex items-center -space-x-2 -mt-1">
                                    <img alt="Image placeholder" src="assets/images/avatars/avatar-3.jpg" class="border-2 border-white rounded-full w-7">
                                    <img alt="Image placeholder" src="assets/images/avatars/avatar-5.jpg" class="border-2 border-white rounded-full w-7">
                                </div>
                                <div class="flex-1 leading-5 text-sm">
                                    <div> <strong>Juwayriah </strong> and 2 freind are members </div>
                                </div>
                            </div>

                            <div class="flex mt-3 space-x-2 text-sm">
                                <a href="#" class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize"> 
                                    Join 
                                </a>
                                <a href="#" class="bg-gray-200 flex flex-1 h-8 items-center justify-center rounded-md capitalize"> 
                                    View 
                                </a>
                            </div>    

                        </div>
                    </div>
                </li>
                <li>
                    <div class="card">
                        <div class="card-media h-28">
                            <div class="card-media-overly"></div>
                            <img src="assets/images/events/img-2.jpg" alt="" class="">
                        </div>
                        <div class="card-body">
                            <a href="timeline-group.html" class="font-semibold text-lg truncate">Wedding Ideas</a href="timeline-group.html" >
                            <div class="flex items-center flex-wrap space-x-1 mt-1 text-sm text-gray-500 capitalize">
                                <a href="#"> <span> 232k members </span> </a>
                                <a href="#"> <span> 1.7k post a day </span> </a>
                            </div>  

                            <div class="flex mt-3.5 space-x-2">
                                <div class="flex items-center -space-x-2 -mt-1">
                                    <img alt="Image placeholder" src="assets/images/avatars/avatar-2.jpg" class="border-2 border-white rounded-full w-7">
                                    <img alt="Image placeholder" src="assets/images/avatars/avatar-1.jpg" class="border-2 border-white rounded-full w-7">
                                </div>
                                <div class="flex-1 leading-5 text-sm">
                                    <div> <strong>Alex </strong> and 4 freind are members </div>
                                </div>
                            </div>

                            <div class="flex mt-3.5 space-x-2 text-sm font-medium">
                                <a href="#" class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize"> 
                                    Join 
                                </a>
                                <a href="#" class="bg-gray-200 flex flex-1 h-8 items-center justify-center rounded-md capitalize"> 
                                    View 
                                </a>
                            </div>    

                        </div>
                    </div>
                </li>
                <li>
                    <div class="card"> 
                        <div class="card-media h-28">
                            <div class="card-media-overly"></div>
                            <img src="assets/images/group/group-cover-3.jpg" alt="" class="">
                        </div>
                        <div class="card-body">
                            <a href="timeline-group.html" class="font-semibold text-lg truncate">Architecture</a>
                            <div class="flex items-center flex-wrap space-x-1 mt-1 text-sm text-gray-500 capitalize">
                                <a href="#"> <span> 232k members </span> </a>
                                <a href="#"> <span> 1.7k post a day </span> </a>
                            </div>     
                            <div class="flex mt-3.5 space-x-2">
                                <div class="flex items-center -space-x-2 -mt-1">
                                    <img alt="Image placeholder" src="assets/images/avatars/avatar-4.jpg" class="border-2 border-white rounded-full w-7">
                                    <img alt="Image placeholder" src="assets/images/avatars/avatar-3.jpg" class="border-2 border-white rounded-full w-7">
                                </div>
                                <div class="flex-1 leading-5 text-sm">
                                    <div> <strong>Dolgove </strong> and 7 freind are members </div>
                                </div>
                            </div>

                            <div class="flex mt-3.5 space-x-2 text-sm font-medium">
                                <a href="#" class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize"> 
                                    Join 
                                </a>
                                <a href="#" class="bg-gray-200 flex flex-1 h-8 items-center justify-center rounded-md capitalize"> 
                                    View 
                                </a>
                            </div>  

                        </div>
                    </div>
                </li>
                <li>
                    <div class="card"> 
                        <div class="card-media h-28">
                            <div class="card-media-overly"></div>
                            <img src="assets/images/group/group-cover-4.jpg" alt="" class="">
                        </div>
                        <div class="card-body">
                            <a href="timeline-group.html" class="font-semibold text-lg truncate">Nature Lovers</a>
                            <div class="flex items-center flex-wrap space-x-1 mt-1 text-sm text-gray-500 capitalize">
                                <a href="#"> <span> 324k members </span> </a>
                                <a href="#"> <span> 1.2k post a day </span> </a>
                            </div>     
                            <div class="flex mt-3.5 space-x-2">
                                <div class="flex items-center -space-x-2 -mt-1">
                                    <img alt="Image placeholder" src="assets/images/avatars/avatar-2.jpg" class="border-2 border-white rounded-full w-7">
                                    <img alt="Image placeholder" src="assets/images/avatars/avatar-4.jpg" class="border-2 border-white rounded-full w-7">
                                </div>
                                <div class="flex-1 leading-5 text-sm">
                                    <div> <strong>Dolgove </strong> and 7 freind are members </div>
                                </div>
                            </div>

                            <div class="flex mt-3.5 space-x-2 text-sm font-medium">
                                <a href="#" class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize"> 
                                    Join 
                                </a>
                                <a href="#" class="bg-gray-200 flex flex-1 h-8 items-center justify-center rounded-md capitalize"> 
                                    View 
                                </a>
                            </div>  

                        </div>
                    </div>
                </li>

            </ul>

            <a class="absolute bg-white bottom-1/2 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i></a>
            <a class="absolute bg-white bottom-1/2 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>

        </div>
    </div>

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
    
    <div class="lg:flex lg:space-x-12">

        <div class="lg:w-3/4"> 


            <h3 class="text-xl font-semibold"> Your Groups </h3>
            <nav class="responsive-nav border-b">
                <ul>
                    <li class="active"><a href="#" class="lg:px-2"> All Groups <span> 3,4510 </span> </a></li>
                    <li><a href="#" class="lg:px-2"> Recently added </a></li>
                    <li><a href="#" class="lg:px-2"> Family </a></li>
                    <li><a href="#" class="lg:px-2"> University </a></li>
                    <li><a href="#" class="lg:px-2"> more </a></li>
                </ul>
            </nav>


            <div class="grid md:grid-cols-2 divide divide-gray-200 gap-x-4 mt-4">
            
                <div class="flex items-center space-x-4 py-3 hover:bg-gray-100 rounded-md -mx-2 px-2">
                    <div class="w-14 h-14 flex-shrink-0 rounded-md relative"> 
                        <img src="assets/images/group/group-3.jpg" class="absolute w-full h-full inset-0 rounded-md object-cover" alt="">
                    </div>
                    <div class="flex-1">
                        <a href="timeline-group.html"  class="text-lg font-semibold capitalize"> Graphic Design </a>
                        <div class="text-sm text-gray-500 mt-0.5"> 215K Member</div>
                    </div>
                    <a href="#" class="flex items-center justify-center h-9 px-4 rounded-md bg-gray-200 font-semibold"> 
                        Join
                   </a>
                </div>

                <div class="flex items-center space-x-4 py-3 hover:bg-gray-100 rounded-md -mx-2 px-2">
                    <div class="w-14 h-14 flex-shrink-0 rounded-md relative"> 
                        <img src="assets/images/group/group-4.jpg" class="absolute w-full h-full inset-0 rounded-md object-cover" alt="">
                    </div>
                    <div class="flex-1">
                        <a href="timeline-group.html"  class="text-lg font-semibold capitalize"> Mountain Riders  </a>
                        <div class="text-sm text-gray-500 mt-0.5"> 845K Member</div>
                    </div>
                    <a href="#" class="flex items-center justify-center h-9 px-4 rounded-md bg-gray-200 font-semibold"> 
                        Join
                   </a>
                </div>
                <div class="flex items-center space-x-4 py-3 hover:bg-gray-100 rounded-md -mx-2 px-2">
                    <div class="w-14 h-14 flex-shrink-0 rounded-md relative"> 
                        <img src="assets/images/group/group-2.jpg" class="absolute w-full h-full inset-0 rounded-md object-cover" alt="">
                    </div>
                    <div class="flex-1">
                        <a href="timeline-group.html"  class="text-lg font-semibold capitalize"> Coffee Addicts</a>
                        <div class="text-sm text-gray-500 mt-0.5"> 845K Member</div>
                    </div>
                    <a href="#" class="flex items-center justify-center h-9 px-4 rounded-md bg-gray-200 font-semibold"> 
                        Join
                   </a>
                </div>

                <div class="flex items-center space-x-4 py-3 hover:bg-gray-100 rounded-md -mx-2 px-2">
                    <div class="w-14 h-14 flex-shrink-0 rounded-md relative"> 
                        <img src="assets/images/group/group-3.jpg" class="absolute w-full h-full inset-0 rounded-md object-cover" alt="">
                    </div>
                    <div class="flex-1">
                        <a href="timeline-group.html"  class="text-lg font-semibold capitalize"> Graphic Design</a>
                        <div class="text-sm text-gray-500 mt-0.5"> 315K Member</div>
                    </div>
                    <a href="#" class="flex items-center justify-center h-9 px-4 rounded-md bg-gray-200 font-semibold"> 
                        Join
                   </a>
                </div>

                <div class="flex items-center space-x-4 py-3 hover:bg-gray-100 rounded-md -mx-2 px-2">
                    <div class="w-14 h-14 flex-shrink-0 rounded-md relative"> 
                        <img src="assets/images/group/group-5.jpg" class="absolute w-full h-full inset-0 rounded-md object-cover" alt="">
                    </div>
                    <div class="flex-1">
                        <a href="timeline-group.html"  class="text-lg font-semibold capitalize">Property Rent</a>
                        <div class="text-sm text-gray-500 mt-0.5"> 285K Member</div>
                    </div>
                    <a href="#" class="flex items-center justify-center h-9 px-4 rounded-md bg-gray-200 font-semibold"> 
                        Join
                   </a>
                </div>

                <div class="flex items-center space-x-4 py-3 hover:bg-gray-100 rounded-md -mx-2 px-2">
                    <div class="w-14 h-14 flex-shrink-0 rounded-md relative"> 
                        <img src="assets/images/group/group-1.jpg" class="absolute w-full h-full inset-0 rounded-md object-cover" alt="">
                    </div>
                    <div class="flex-1">
                        <a href="timeline-group.html"  class="text-lg font-semibold capitalize">Architecture</a>
                        <div class="text-sm text-gray-500 mt-0.5"> 845K Member</div>
                    </div>
                    <a href="#" class="flex items-center justify-center h-9 px-4 rounded-md bg-gray-200 font-semibold"> 
                        Join
                   </a>
                </div>

                <div class="flex items-center space-x-4 py-3 hover:bg-gray-100 rounded-md -mx-2 px-2">
                    <div class="w-14 h-14 flex-shrink-0 rounded-md relative"> 
                        <img src="assets/images/group/group-4.jpg" class="absolute w-full h-full inset-0 rounded-md object-cover" alt="">
                    </div>
                    <div class="flex-1">
                        <a href="timeline-group.html"  class="text-lg font-semibold capitalize"> Mountain Riders  </a>
                        <div class="text-sm text-gray-500 mt-0.5"> 845K Member</div>
                    </div>
                    <a href="#" class="flex items-center justify-center h-9 px-4 rounded-md bg-gray-200 font-semibold"> 
                        Join
                   </a>
                </div>

                <div class="flex items-center space-x-4 py-3 hover:bg-gray-100 rounded-md -mx-2 px-2">
                    <div class="w-14 h-14 flex-shrink-0 rounded-md relative"> 
                        <img src="assets/images/group/group-2.jpg" class="absolute w-full h-full inset-0 rounded-md object-cover" alt="">
                    </div>
                    <div class="flex-1">
                        <a href="timeline-group.html"  class="text-lg font-semibold capitalize"> Coffee Addicts</a>
                        <div class="text-sm text-gray-500 mt-0.5"> 180K Member</div>
                    </div>
                    <a href="#" class="flex items-center justify-center h-9 px-4 rounded-md bg-gray-200 font-semibold"> 
                        Join
                   </a>
                </div>

                <div class="flex items-center space-x-4 py-3 hover:bg-gray-100 rounded-md -mx-2 px-2">
                    <div class="w-14 h-14 flex-shrink-0 rounded-md relative"> 
                        <img src="assets/images/group/group-2.jpg" class="absolute w-full h-full inset-0 rounded-md object-cover" alt="">
                    </div>
                    <div class="flex-1">
                        <a href="timeline-group.html"  class="text-lg font-semibold capitalize">Delicious Foods</a>
                        <div class="text-sm text-gray-500 mt-0.5"> 235K Member</div>
                    </div>
                    <a href="#" class="flex items-center justify-center h-9 px-4 rounded-md bg-gray-200 font-semibold"> 
                        Join
                   </a>
                </div>
                <div class="flex items-center space-x-4 py-3 hover:bg-gray-100 rounded-md -mx-2 px-2">
                    <div class="w-14 h-14 flex-shrink-0 rounded-md relative"> 
                        <img src="assets/images/events/img-2.jpg" class="absolute w-full h-full inset-0 rounded-md object-cover" alt="">
                    </div>
                    <div class="flex-1">
                        <a href="timeline-group.html"  class="text-lg font-semibold capitalize">Wedding Ideas</a>
                        <div class="text-sm text-gray-500 mt-0.5"> 845K Member</div>
                    </div>
                    <a href="#" class="flex items-center justify-center h-9 px-4 rounded-md bg-gray-200 font-semibold"> 
                        Join
                   </a>
                </div>

            </div> 
        </div>
        <div class="lg:w-1/4 flex-shrink-0 space-y-5"> 
        
            <h2 class="text-xl font-semibold mt-7"> Suggested For You </h2>

            <div class="card">
                <div class="card-media h-28">
                    <div class="card-media-overly"></div>
                    <img src="assets/images/events/img-2.jpg" alt="" class="">
                </div>
                <div class="card-body">
                    <a href="timeline-group.html"  class="font-semibold text-lg truncate mb-1">   Graphic Design </a>
                    <div class="flex items-center space-x-1 text-sm text-gray-500 capitalize">
                        <a href="#"> <span> 232k members </span> </a>
                        <a href="#"> <span> 1.7k post a day </span> </a>
                    </div>  

                    <div class="flex mt-3 space-x-2 text-sm">
                        <a href="#" class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize"> 
                            Join 
                        </a>
                    </div>    

                </div>
            </div>
            <div class="card">
                <div class="card-media h-28">
                    <div class="card-media-overly"></div>
                    <img src="assets/images/events/img-2.jpg" alt="" class="">
                </div>
                <div class="card-body">
                    <a href="timeline-group.html"  class="font-semibold text-lg truncate mb-1">   Graphic Design </a>
                    <div class="flex items-center space-x-1 text-sm text-gray-500 capitalize">
                        <a href="#"> <span> 232k members </span> </a>
                        <a href="#"> <span> 1.7k post a day </span> </a>
                    </div>  

                    <div class="flex mt-3 space-x-2 text-sm">
                        <a href="#" class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize"> 
                            Join 
                        </a>
                    </div>    

                </div>
            </div>

        </div>

    </div>

    <div class="my-6 flex items-center justify-between border-b pb-3">
        <div>
            <h2 class="text-xl font-semibold"> Suggestions  </h2>
            <p class="font-medium text-gray-500 leading-6"> Find a groups You Might Be Interested In. </p>
        </div>
        <a href="#" class="text-blue-500 sm:block hidden"> See all </a>
    </div> 

    <div class="grid md:grid-cols-2 divide divide-gray-200 gap-x-6 gap-y-4">

        <div class="flex items-center space-x-4">
            <div class="w-20 h-20 flex-shrink-0 rounded-md relative mb-3"> 
                <img src="assets/images/group/group-4.jpg" class="absolute w-full h-full inset-0 rounded-md object-cover shadow-sm" alt="">
            </div> 
            <div class="flex-1 border-b pb-3">
                <a href="timeline-group.html"  class="text-lg font-semibold capitalize"> Mountain Riders</a>
                <div class="flex space-x-2 items-center text-sm">
                    <div> 16K Members</div>
                    <div>·</div>
                    <div> 12 posts a week</div>
                </div>
                <div class="flex items-center mt-2">
                    <img src="assets/images/avatars/avatar-2.jpg" class="w-6 rounded-full border-2 border-gray-200 -mr-2" alt="">
                    <img src="assets/images/avatars/avatar-4.jpg" class="w-6 rounded-full border-2 border-gray-200" alt="">
                    <div class="text-sm text-gray-500 ml-2"> 2 friends are members</div>
                </div>

            </div>
            <a href="#" class="flex items-center justify-center h-9 px-3 rounded-md bg-blue-100 text-blue-500"> 
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-2">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path>
                        </svg>Follow
                    </a>
        </div>
        <div class="flex items-center space-x-4">
            <div class="w-20 h-20 flex-shrink-0 rounded-md relative mb-3"> 
                <img src="assets/images/group/group-5.jpg" class="absolute w-full h-full inset-0 rounded-md object-cover shadow-sm" alt="">
            </div> 
            <div class="flex-1 border-b pb-3">
                <a href="timeline-group.html"  class="text-lg font-semibold capitalize">  Property Rent And Sale </a>
                <div class="flex space-x-2 items-center text-sm">
                    <div> 16K Members</div>
                    <div>·</div>
                    <div> 12 posts a week</div>
                </div>
                <div class="flex items-center mt-2">
                    <img src="assets/images/avatars/avatar-2.jpg" class="w-6 rounded-full border-2 border-gray-200 -mr-2" alt="">
                    <img src="assets/images/avatars/avatar-4.jpg" class="w-6 rounded-full border-2 border-gray-200" alt="">
                    <div class="text-sm text-gray-500 ml-2"> 2 friends are members</div>
                </div>

            </div>
            <a href="#" class="flex items-center justify-center h-9 px-3 rounded-md bg-blue-100 text-blue-500"> 
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-2">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path>
                        </svg>Follow
                    </a>
        </div>
        <div class="flex items-center space-x-4">
            <div class="w-20 h-20 flex-shrink-0 rounded-md relative mb-3"> 
                <img src="assets/images/group/group-3.jpg" class="absolute w-full h-full inset-0 rounded-md object-cover shadow-sm" alt="">
            </div> 
            <div class="flex-1 border-b pb-3">
                <a href="timeline-group.html"  class="text-lg font-semibold capitalize"> Graphic Design </a>
                <div class="flex space-x-2 items-center text-sm">
                    <div> 16K Members</div>
                    <div>·</div>
                    <div> 12 posts a week</div>
                </div>
                <div class="flex items-center mt-2">
                    <img src="assets/images/avatars/avatar-2.jpg" class="w-6 rounded-full border-2 border-gray-200 -mr-2" alt="">
                    <img src="assets/images/avatars/avatar-4.jpg" class="w-6 rounded-full border-2 border-gray-200" alt="">
                    <div class="text-sm text-gray-500 ml-2"> 2 friends are members</div>
                </div>

            </div>
            <a href="#" class="flex items-center justify-center h-9 px-3 rounded-md bg-blue-100 text-blue-500"> 
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-2">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path>
                        </svg>Follow
                    </a>
        </div>
        <div class="flex items-center space-x-4">
            <div class="w-20 h-20 flex-shrink-0 rounded-md relative mb-3"> 
                <img src="assets/images/group/group-2.jpg" class="absolute w-full h-full inset-0 rounded-md object-cover shadow-sm" alt="">
            </div> 
            <div class="flex-1 border-b pb-3">
                <a href="timeline-group.html"  class="text-lg font-semibold capitalize"> Coffee Addicts </a>
                <div class="flex space-x-2 items-center text-sm">
                    <div> 16K Members</div>
                    <div>·</div>
                    <div> 12 posts a week</div>
                </div>
                <div class="flex items-center mt-2">
                    <img src="assets/images/avatars/avatar-2.jpg" class="w-6 rounded-full border-2 border-gray-200 -mr-2" alt="">
                    <img src="assets/images/avatars/avatar-4.jpg" class="w-6 rounded-full border-2 border-gray-200" alt="">
                    <div class="text-sm text-gray-500 ml-2"> 2 friends are members</div>
                </div>

            </div>
            <a href="#" class="flex items-center justify-center h-9 px-3 rounded-md bg-blue-100 text-blue-500"> 
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-2">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path>
                        </svg>Follow
                    </a>
        </div>
        <div class="flex items-center space-x-4">
            <div class="w-20 h-20 flex-shrink-0 rounded-md relative mb-3"> 
                <img src="assets/images/group/group-1.jpg" class="absolute w-full h-full inset-0 rounded-md object-cover shadow-sm" alt="">
            </div> 
            <div class="flex-1 border-b pb-3">
                <a href="timeline-group.html"  class="text-lg font-semibold capitalize">  Property Rent And Sale </a>
                <div class="flex space-x-2 items-center text-sm">
                    <div> 16K Members</div>
                    <div>·</div>
                    <div> 12 posts a week</div>
                </div>
                <div class="flex items-center mt-2">
                    <img src="assets/images/avatars/avatar-2.jpg" class="w-6 rounded-full border-2 border-gray-200 -mr-2" alt="">
                    <img src="assets/images/avatars/avatar-4.jpg" class="w-6 rounded-full border-2 border-gray-200" alt="">
                    <div class="text-sm text-gray-500 ml-2"> 2 friends are members</div>
                </div>

            </div>
            <a href="#" class="flex items-center justify-center h-9 px-3 rounded-md bg-blue-100 text-blue-500"> 
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-2">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path>
                        </svg>Follow
                    </a>
        </div>
       
        <div class="flex items-center space-x-4">
            <div class="w-20 h-20 flex-shrink-0 rounded-md relative mb-3"> 
                <img src="assets/images/group/group-cover-3.jpg" class="absolute w-full h-full inset-0 rounded-md object-cover shadow-sm" alt="">
            </div> 
            <div class="flex-1 border-b pb-3">
                <a href="timeline-group.html"  class="text-lg font-semibold capitalize"> Architecture </a>
                <div class="flex space-x-2 items-center text-sm">
                    <div> 16K Members</div>
                    <div>·</div>
                    <div> 12 posts a week</div>
                </div>
                <div class="flex items-center mt-2">
                    <img src="assets/images/avatars/avatar-2.jpg" class="w-6 rounded-full border-2 border-gray-200 -mr-2" alt="">
                    <img src="assets/images/avatars/avatar-4.jpg" class="w-6 rounded-full border-2 border-gray-200" alt="">
                    <div class="text-sm text-gray-500 ml-2"> 2 friends are members</div>
                </div>

            </div>
            <a href="#" class="flex items-center justify-center h-9 px-3 rounded-md bg-blue-100 text-blue-500"> 
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-2">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path>
                        </svg>Follow
                    </a>
        </div>
    </div>
    

</div>
@endsection