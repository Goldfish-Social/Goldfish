@extends('layouts.app')

@section('content')
<div class="container m-auto">

    <h1 class="lg:text-2xl text-lg font-extrabold leading-none text-gray-900 tracking-tight mb-5"> Feed </h1>

    <div class="lg:flex justify-center lg:space-x-10 lg:space-y-0 space-y-5">

        <!-- left sidebar-->
        <div class="space-y-5 flex-shrink-0 lg:w-7/12">

            <!-- post 1-->
            <div class="bg-white shadow rounded-md dark:bg-gray-900 -mx-2 lg:mx-0">

                <!-- post header-->
                <div class="flex justify-between items-center px-4 py-3">
                    <div class="flex flex-1 items-center space-x-4">
                        <a href="#">
                            <div class="bg-gradient-to-tr from-yellow-600 to-pink-600 p-0.5 rounded-full">  
                                <img src="{{asset('assets/images/avatars/avatar-2.jpg')}}" class="bg-gray-200 border border-white rounded-full w-8 h-8">
                            </div>
                        </a>
                        <span class="block capitalize font-semibold dark:text-gray-100"> @stux </span>
                    </div>
                  <div>
                    <a href="#"> <i class="icon-feather-more-horizontal text-2xl hover:bg-gray-200 rounded-full p-2 transition -mr-1 dark:hover:bg-gray-700"></i> </a>
                    <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden text-base border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700" uk-drop="mode: hover;pos: top-right">
                  
                        <ul class="space-y-1">
                          <li> 
                              <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                               <i class="uil-share-alt mr-1"></i> Share
                              </a> 
                          </li>
                          <li> 
                              <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                               <i class="uil-edit-alt mr-1"></i>  Edit Post 
                              </a> 
                          </li>
                          <li> 
                              <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                               <i class="uil-comment-slash mr-1"></i>   Disable comments
                              </a> 
                          </li> 
                          <li> 
                              <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                               <i class="uil-favorite mr-1"></i>  Add favorites 
                              </a> 
                          </li>
                          <li>
                            <hr class="-mx-2 my-2 dark:border-gray-800">
                          </li>
                          <li> 
                              <a href="#" class="flex items-center px-3 py-2 text-red-500 hover:bg-red-100 hover:text-red-500 rounded-md dark:hover:bg-red-600">
                               <i class="uil-trash-alt mr-1"></i>  Delete
                              </a> 
                          </li>
                        </ul>
                    
                    </div>
                  </div>
                </div>

                <div uk-lightbox>
                    <a href="{{asset('assets/images/post/img4.jpg')}}">  
                        <img src="{{asset('assets/images/post/img4.jpg')}}" alt="">
                    </a>
                </div>
                

                <div class="py-3 px-4 space-y-3"> 
                   
                    <div class="flex space-x-4 lg:font-bold">
                        <a href="#" class="flex items-center space-x-2">
                            <div class="p-2 rounded-full text-black">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                    <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                </svg>
                            </div>
                            <div> Like</div>
                        </a>
                        <a href="#" class="flex items-center space-x-2">
                            <div class="p-2 rounded-full text-black">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                    <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div> Comment</div>
                        </a>
                        <a href="#" class="flex items-center space-x-2 flex-1 justify-end">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                            </svg>
                            <div> Share</div>
                        </a>
                    </div>
                    <div class="flex items-center space-x-3"> 
                        <div class="flex items-center">
                            <img src="assets/images/avatars/avatar-1.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900">
                            <img src="assets/images/avatars/avatar-4.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                            <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                        </div>
                        <div class="dark:text-gray-100">
                            Liked <strong> Johnson</strong> and <strong> 209 Others </strong>
                        </div>
                    </div>

                    <div class="border-t pt-4 space-y-4 dark:border-gray-600">
                        <div class="flex">
                            <div class="w-10 h-10 rounded-full relative flex-shrink-0">
                                <img src="assets/images/avatars/avatar-1.jpg" alt="" class="absolute h-full rounded-full w-full">
                            </div>
                            <div class="text-gray-700 py-2 px-3 rounded-md bg-gray-100 h-full relative lg:ml-5 ml-2 lg:mr-20  dark:bg-gray-800 dark:text-gray-100">
                                <p class="leading-6">In ut odio libero vulputate <urna class="i uil-heart"></urna> <i
                                        class="uil-grin-tongue-wink"> </i> </p>
                                <div class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-800"></div>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="w-10 h-10 rounded-full relative flex-shrink-0">
                                <img src="assets/images/avatars/avatar-1.jpg" alt="" class="absolute h-full rounded-full w-full">
                            </div>
                            <div class="text-gray-700 py-2 px-3 rounded-md bg-gray-100 h-full relative lg:ml-5 ml-2 lg:mr-20  dark:bg-gray-800 dark:text-gray-100">
                                <p class="leading-6">Nam liber tempor cum soluta nobis eleifend option <i class="uil-grin-tongue-wink-alt"></i>
                                </p>
                                <div class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-800"></div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-100 bg-gray-100 rounded-full rounded-md relative dark:bg-gray-800">
                        <input type="text" placeholder="Add your Comment.." class="bg-transparent max-h-10 shadow-none">
                        <div class="absolute bottom-0 flex h-full items-center right-0 right-3 text-xl space-x-2">
                            <a href="#"> <i class="uil-image"></i></a>
                            <a href="#"> <i class="uil-video"></i></a>
                        </div>
                    </div>

                </div>

            </div>

            <!-- post 2-->                       
        
            <div class="bg-white shadow rounded-md dark:bg-gray-900 -mx-2 lg:mx-0">

                <!-- post header-->
                <div class="flex justify-between items-center px-4 py-3">
                    <div class="flex flex-1 items-center space-x-4">
                        <a href="#">
                            <div class="bg-gradient-to-tr from-yellow-600 to-pink-600 p-0.5 rounded-full">  
                                <img src="assets/images/avatars/avatar-2.jpg" class="bg-gray-200 border border-white rounded-full w-8 h-8">
                            </div>
                        </a>
                        <span class="block capitalize font-semibold dark:text-gray-100"> Johnson smith </span>
                    </div>
                  <div>
                    <a href="#"> <i class="icon-feather-more-horizontal text-2xl hover:bg-gray-200 rounded-full p-2 transition -mr-1 dark:hover:bg-gray-700"></i> </a>
                    <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden text-base border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700" uk-drop="mode: hover;pos: top-right">
                  
                        <ul class="space-y-1">
                          <li> 
                              <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                               <i class="uil-share-alt mr-1"></i> Share
                              </a> 
                          </li>
                          <li> 
                              <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                               <i class="uil-edit-alt mr-1"></i>  Edit Post 
                              </a> 
                          </li>
                          <li> 
                              <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                               <i class="uil-comment-slash mr-1"></i>   Disable comments
                              </a> 
                          </li> 
                          <li> 
                              <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                               <i class="uil-favorite mr-1"></i>  Add favorites 
                              </a> 
                          </li>
                          <li>
                            <hr class="-mx-2 my-2 dark:border-gray-800">
                          </li>
                          <li> 
                              <a href="#" class="flex items-center px-3 py-2 text-red-500 hover:bg-red-100 hover:text-red-500 rounded-md dark:hover:bg-red-600">
                               <i class="uil-trash-alt mr-1"></i>  Delete
                              </a> 
                          </li>
                        </ul>
                    
                    </div>
                  </div>
                </div>

                <div uk-lightbox>
                    <div class="grid grid-cols-2 gap-2 p-2">

                        <a href="assets/images/post/img9.jpg" class="col-span-2">  
                            <img src="assets/images/post/img9.jpg" alt="" class="rounded-md w-full lg:h-76 object-cover">
                        </a>
                        <a href="assets/images/post/img10.jpg">  
                            <img src="assets/images/post/img10.jpg" alt="" class="rounded-md w-full h-full">
                        </a>
                        <a href="assets/images/post/img11.jpg" class="relative">  
                            <img src="assets/images/post/img11.jpg" alt="" class="rounded-md w-full h-full">
                            <div class="absolute bg-gray-900 bg-opacity-30 flex justify-center items-center text-white rounded-md inset-0 text-2xl"> + 15 more </div>
                        </a>

                    </div>
                </div>

                <div class="py-3 px-4 space-y-3"> 
                   
                    <div class="flex space-x-4 lg:font-bold">
                        <a href="#" class="flex items-center space-x-2">
                            <div class="p-2 rounded-full text-black">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                    <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                </svg>
                            </div>
                            <div> Like</div>
                        </a>
                        <a href="#" class="flex items-center space-x-2">
                            <div class="p-2 rounded-full text-black">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                    <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div> Comment</div>
                        </a>
                        <a href="#" class="flex items-center space-x-2 flex-1 justify-end">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                            </svg>
                            <div> Share</div>
                        </a>
                    </div>
                    <div class="flex items-center space-x-3"> 
                        <div class="flex items-center">
                            <img src="assets/images/avatars/avatar-1.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900">
                            <img src="assets/images/avatars/avatar-4.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                            <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                        </div>
                        <div class="dark:text-gray-100">
                            Liked <strong> Johnson</strong> and <strong> 209 Others </strong>
                        </div>
                    </div>

                    <div class="border-t pt-4 space-y-4 dark:border-gray-600">
                        <div class="flex">
                            <div class="w-10 h-10 rounded-full relative flex-shrink-0">
                                <img src="assets/images/avatars/avatar-1.jpg" alt="" class="absolute h-full rounded-full w-full">
                            </div>
                            <div class="text-gray-700 py-2 px-3 rounded-md bg-gray-100 h-full relative lg:ml-5 ml-2 lg:mr-20  dark:bg-gray-800 dark:text-gray-100">
                                <p class="leading-6">In ut odio libero vulputate <urna class="i uil-heart"></urna> <i
                                        class="uil-grin-tongue-wink"> </i> </p>
                                <div class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-800"></div>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="w-10 h-10 rounded-full relative flex-shrink-0">
                                <img src="assets/images/avatars/avatar-1.jpg" alt="" class="absolute h-full rounded-full w-full">
                            </div>
                            <div class="text-gray-700 py-2 px-3 rounded-md bg-gray-100 h-full relative lg:ml-5 ml-2 lg:mr-20  dark:bg-gray-800 dark:text-gray-100">
                                <p class="leading-6">Nam liber tempor cum soluta nobis eleifend option <i class="uil-grin-tongue-wink-alt"></i>
                                </p>
                                <div class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-800"></div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-100 bg-gray-100 rounded-full rounded-md relative dark:bg-gray-800">
                        <input type="text" placeholder="Add your Comment.." class="bg-transparent max-h-10 shadow-none">
                        <div class="absolute bottom-0 flex h-full items-center right-0 right-3 text-xl space-x-2">
                            <a href="#"> <i class="uil-image"></i></a>
                            <a href="#"> <i class="uil-video"></i></a>
                        </div>
                    </div>

                </div>

            </div>

            <!-- Load more-->
            <div class="flex justify-center mt-6" id="toggle" uk-toggle="target: #toggle ;animation: uk-animation-fade">
                <a href="#"
                    class="bg-white dark:bg-gray-900 font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white">
                    Load more ..</a>
            </div>

            <!-- post 3-->
            <div class="bg-white shadow rounded-md dark:bg-gray-900 -mx-2 lg:mx-0" id="toggle" hidden>

                <!-- post header-->
                <div class="flex justify-between items-center px-4 py-3">
                    <div class="flex flex-1 items-center space-x-4">
                        <a href="#">
                            <div class="bg-gradient-to-tr from-yellow-600 to-pink-600 p-0.5 rounded-full">  
                                <img src="assets/images/avatars/avatar-2.jpg" class="bg-gray-200 border border-white rounded-full w-8 h-8">
                            </div>
                        </a>
                        <span class="block capitalize font-semibold dark:text-gray-100"> Johnson smith </span>
                    </div>
                  <div>
                    <a href="#"> <i class="icon-feather-more-horizontal text-2xl hover:bg-gray-200 rounded-full p-2 transition -mr-1 dark:hover:bg-gray-700"></i> </a>
                    <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden text-base border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700" uk-drop="mode: hover;pos: top-right">
                  
                        <ul class="space-y-1">
                          <li> 
                              <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                               <i class="uil-share-alt mr-1"></i> Share
                              </a> 
                          </li>
                          <li> 
                              <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                               <i class="uil-edit-alt mr-1"></i>  Edit Post 
                              </a> 
                          </li>
                          <li> 
                              <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                               <i class="uil-comment-slash mr-1"></i>   Disable comments
                              </a> 
                          </li> 
                          <li> 
                              <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                               <i class="uil-favorite mr-1"></i>  Add favorites 
                              </a> 
                          </li>
                          <li>
                            <hr class="-mx-2 my-2 dark:border-gray-800">
                          </li>
                          <li> 
                              <a href="#" class="flex items-center px-3 py-2 text-red-500 hover:bg-red-100 hover:text-red-500 rounded-md dark:hover:bg-red-600">
                               <i class="uil-trash-alt mr-1"></i>  Delete
                              </a> 
                          </li>
                        </ul>
                    
                    </div>
                  </div>
                </div>

                <div class="p-3 border-b dark:border-gray-700">

                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim laoreet dolore magna aliquam erat volutpat

                </div>
                

                <div class="py-3 px-4 space-y-3"> 
                   
                    <div class="flex space-x-4 lg:font-bold">
                        <a href="#" class="flex items-center space-x-2">
                            <div class="p-2 rounded-full text-black">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                    <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                </svg>
                            </div>
                            <div> Like</div>
                        </a>
                        <a href="#" class="flex items-center space-x-2">
                            <div class="p-2 rounded-full text-black">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                    <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div> Comment</div>
                        </a>
                        <a href="#" class="flex items-center space-x-2 flex-1 justify-end">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                            </svg>
                            <div> Share</div>
                        </a>
                    </div>
                    <div class="flex items-center space-x-3"> 
                        <div class="flex items-center">
                            <img src="assets/images/avatars/avatar-1.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900">
                            <img src="assets/images/avatars/avatar-4.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                            <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                        </div>
                        <div class="dark:text-gray-100">
                            Liked <strong> Johnson</strong> and <strong> 209 Others </strong>
                        </div>
                    </div>

                    <div class="border-t pt-4 space-y-4 dark:border-gray-600">
                        <div class="flex">
                            <div class="w-10 h-10 rounded-full relative flex-shrink-0">
                                <img src="assets/images/avatars/avatar-1.jpg" alt="" class="absolute h-full rounded-full w-full">
                            </div>
                            <div class="text-gray-700 py-2 px-3 rounded-md bg-gray-100 h-full relative lg:ml-5 ml-2 lg:mr-20  dark:bg-gray-800 dark:text-gray-100">
                                <p class="leading-6">In ut odio libero vulputate <urna class="i uil-heart"></urna> <i
                                        class="uil-grin-tongue-wink"> </i> </p>
                                <div class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-800"></div>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="w-10 h-10 rounded-full relative flex-shrink-0">
                                <img src="assets/images/avatars/avatar-1.jpg" alt="" class="absolute h-full rounded-full w-full">
                            </div>
                            <div class="text-gray-700 py-2 px-3 rounded-md bg-gray-100 h-full relative lg:ml-5 ml-2 lg:mr-20  dark:bg-gray-800 dark:text-gray-100">
                                <p class="leading-6">Nam liber tempor cum soluta nobis eleifend option <i class="uil-grin-tongue-wink-alt"></i>
                                </p>
                                <div class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-800"></div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-100 bg-gray-100 rounded-full rounded-md relative dark:bg-gray-800">
                        <input type="text" placeholder="Add your Comment.." class="bg-transparent max-h-10 shadow-none">
                        <div class="absolute bottom-0 flex h-full items-center right-0 right-3 text-xl space-x-2">
                            <a href="#"> <i class="uil-image"></i></a>
                            <a href="#"> <i class="uil-video"></i></a>
                        </div>
                    </div>

                </div>

            </div>
            
            <!-- post 4-->
            <div class="bg-white shadow rounded-md dark:bg-gray-900 -mx-2 lg:mx-0" id="toggle" hidden>

              <!-- post header-->
              <div class="flex justify-between items-center px-4 py-3">
                  <div class="flex flex-1 items-center space-x-4">
                      <a href="#">
                          <div class="bg-gradient-to-tr from-yellow-600 to-pink-600 p-0.5 rounded-full">  
                              <img src="assets/images/avatars/avatar-2.jpg" class="bg-gray-200 border border-white rounded-full w-8 h-8">
                          </div>
                      </a>
                      <span class="block capitalize font-semibold dark:text-gray-100"> Johnson smith </span>
                  </div>
                <div>
                  <a href="#"> <i class="icon-feather-more-horizontal text-2xl hover:bg-gray-200 rounded-full p-2 transition -mr-1 dark:hover:bg-gray-700"></i> </a>
                  <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden text-base border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700" uk-drop="mode: hover;pos: top-right">
                
                      <ul class="space-y-1">
                        <li> 
                            <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                             <i class="uil-share-alt mr-1"></i> Share
                            </a> 
                        </li>
                        <li> 
                            <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                             <i class="uil-edit-alt mr-1"></i>  Edit Post 
                            </a> 
                        </li>
                        <li> 
                            <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                             <i class="uil-comment-slash mr-1"></i>   Disable comments
                            </a> 
                        </li> 
                        <li> 
                            <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                             <i class="uil-favorite mr-1"></i>  Add favorites 
                            </a> 
                        </li>
                        <li>
                          <hr class="-mx-2 my-2 dark:border-gray-800">
                        </li>
                        <li> 
                            <a href="#" class="flex items-center px-3 py-2 text-red-500 hover:bg-red-100 hover:text-red-500 rounded-md dark:hover:bg-red-600">
                             <i class="uil-trash-alt mr-1"></i>  Delete
                            </a> 
                        </li>
                      </ul>
                  
                  </div>
                </div>
              </div>

             
                <div class="w-full h-full">
                    <iframe src="https://www.youtube.com/embed/pQN-pnXPaVg" frameborder="0"
                        uk-video="automute: true" allowfullscreen uk-responsive class="w-full lg:h-64 h-40"></iframe>
                </div>
               

              <div class="py-3 px-4 space-y-3"> 
                 
                  <div class="flex space-x-4 lg:font-bold">
                      <a href="#" class="flex items-center space-x-2">
                          <div class="p-2 rounded-full text-black">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                  <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                              </svg>
                          </div>
                          <div> Like</div>
                      </a>
                      <a href="#" class="flex items-center space-x-2">
                          <div class="p-2 rounded-full text-black">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                  <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                              </svg>
                          </div>
                          <div> Comment</div>
                      </a>
                      <a href="#" class="flex items-center space-x-2 flex-1 justify-end">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                              <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                          </svg>
                          <div> Share</div>
                      </a>
                  </div>
                  <div class="flex items-center space-x-3"> 
                      <div class="flex items-center">
                          <img src="assets/images/avatars/avatar-1.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900">
                          <img src="assets/images/avatars/avatar-4.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                          <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                      </div>
                      <div class="dark:text-gray-100">
                          Liked <strong> Johnson</strong> and <strong> 209 Others </strong>
                      </div>
                  </div>

                  <div class="border-t pt-4 space-y-4 dark:border-gray-600">
                      <div class="flex">
                          <div class="w-10 h-10 rounded-full relative flex-shrink-0">
                              <img src="assets/images/avatars/avatar-1.jpg" alt="" class="absolute h-full rounded-full w-full">
                          </div>
                          <div class="text-gray-700 py-2 px-3 rounded-md bg-gray-100 h-full relative lg:ml-5 ml-2 lg:mr-20  dark:bg-gray-800 dark:text-gray-100">
                              <p class="leading-6">In ut odio libero vulputate <urna class="i uil-heart"></urna> <i
                                      class="uil-grin-tongue-wink"> </i> </p>
                              <div class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-800"></div>
                          </div>
                      </div>
                      <div class="flex">
                          <div class="w-10 h-10 rounded-full relative flex-shrink-0">
                              <img src="assets/images/avatars/avatar-1.jpg" alt="" class="absolute h-full rounded-full w-full">
                          </div>
                          <div class="text-gray-700 py-2 px-3 rounded-md bg-gray-100 h-full relative lg:ml-5 ml-2 lg:mr-20  dark:bg-gray-800 dark:text-gray-100">
                              <p class="leading-6">Nam liber tempor cum soluta nobis eleifend option <i class="uil-grin-tongue-wink-alt"></i>
                              </p>
                              <div class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-800"></div>
                          </div>
                      </div>
                  </div>

                  <div class="bg-gray-100 bg-gray-100 rounded-full rounded-md relative dark:bg-gray-800">
                      <input type="text" placeholder="Add your Comment.." class="bg-transparent max-h-10 shadow-none">
                      <div class="absolute bottom-0 flex h-full items-center right-0 right-3 text-xl space-x-2">
                          <a href="#"> <i class="uil-image"></i></a>
                          <a href="#"> <i class="uil-video"></i></a>
                      </div>
                  </div>

              </div>

            </div>
            
            <!-- Load more-->
            <div class="flex justify-center mt-6" id="toggle" hidden>
                <a href="#"
                    class="bg-white dark:bg-gray-900 font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white">
                    Load more ..</a>
            </div>


        </div>

       @include('components.post-sidebar')

    </div>               


</div>
@endsection
