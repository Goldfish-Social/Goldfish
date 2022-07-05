@extends('layouts.app')

@section('content')

    <!-- Profile cover -->
    <div class="profile user-profile">

        <div class="profiles_banner">
            <img src="{{asset('storage/' . $user->header_bg)}}" alt="">
            @if (Auth::user()->can('update-profile', $user))
            <div class="profile_action absolute bottom-0 right-0 space-x-1.5 p-3 text-sm z-50 hidden lg:flex">
              <a href="#" class="flex items-center justify-center h-8 px-3 rounded-md bg-gray-700 bg-opacity-70 text-white space-x-1.5"> 
                  <ion-icon name="crop-outline" class="text-xl"></ion-icon>
                  <span> Crop  </span>
              </a>
              <a href="#" class="flex items-center justify-center h-8 px-3 rounded-md bg-gray-700 bg-opacity-70 text-white space-x-1.5"> 
                  <ion-icon name="create-outline" class="text-xl"></ion-icon>
                  <span> Edit </span>
              </a>
          </div>
          @endcan
        </div>
        <div class="profiles_content">

            <div class="profile_avatar">
                <div class="profile_avatar_holder"> 
                    <img src="{{asset('storage/' . $user->avatar)}}" alt="">
                </div>
                <div class="user_status status_online"></div>
                <div class="icon_change_photo" hidden> <ion-icon name="camera" class="text-xl"></ion-icon> </div>
            </div>

            <div class="profile_info">
                <h1> {{$user->username}} </h1>
                <p> Family , Food , Fashion , Fourever <a href="{{ route('settings') }}">Edit</a></p>
            </div>

        </div>

        <div class="flex justify-between lg:border-t border-gray-100 flex-col-reverse lg:flex-row pt-2">
            <nav class="responsive-nav pl-3">
                <ul  uk-switcher="connect: #timeline-tab; animation: uk-animation-fade">
                    <li><a href="#">Timeline</a></li>
                    <li><a href="#">Friend <span>3,243</span> </a></li>
                    <li><a href="#">Photoes </a></li>
                    <li><a href="#">Pages</a></li> 
                    <li><a href="#">Groups</a></li> 
                    <li><a href="#">Videos</a></li> 
                </ul>
            </nav>

            <!-- button actions -->
            <div class="flex items-center space-x-1.5 flex-shrink-0 pr-4 mb-2 justify-center order-1 relative">
                
                <!-- add story -->
                <a href="#" class="flex items-center justify-center h-10 px-5 rounded-md bg-blue-600 text-white space-x-1.5 hover:text-white"  uk-toggle="target: #create-post-modal"> 
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path>
                    </svg>
                    <span> Add Your Story </span>
                </a>
               
                <!-- search icon -->
                <a href="#" class="flex items-center justify-center h-10 w-10 rounded-md bg-gray-100" uk-toggle="target: #profile-search;animation: uk-animation-slide-top-small"> 
                  <ion-icon name="search" class="text-xl"></ion-icon>
                </a>
                <!-- search dropdown -->
                <div class="absolute right-3 bg-white z-10 w-full flex items-center border rounded-md"
                    id="profile-search" hidden>
                    <input type="text" placeholder="Search.." class="flex-1">
                    <ion-icon name="close-outline" class="text-2xl hover:bg-gray-100 p-1 rounded-full mr-2 cursor-pointer" uk-toggle="target: #profile-search;animation: uk-animation-slide-top-small"></ion-icon>
                </div>
                
                <!-- more icon -->
                <a href="#" class="flex items-center justify-center h-10 w-10 rounded-md bg-gray-100"> 
                    <ion-icon name="ellipsis-horizontal" class="text-xl"></ion-icon>
                </a>
                <!-- more drowpdown -->
                <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700"  
                  uk-drop="mode: click;pos: bottom-right;animation: uk-animation-slide-bottom-small; offset:5">
                      <ul class="space-y-1">
                        <li> 
                            <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                               <ion-icon name="arrow-redo-outline" class="pr-2 text-xl"></ion-icon> Share Profile
                            </a> 
                        </li>
                        <li> 
                            <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                              <ion-icon name="create-outline" class="pr-2 text-xl"></ion-icon>  Account setting 
                            </a> 
                        </li>
                        <li> 
                            <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                              <ion-icon name="notifications-off-outline" class="pr-2 text-lg"></ion-icon>   Disable notifications
                            </a> 
                        </li> 
                        <li> 
                            <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                              <ion-icon name="star-outline"  class="pr-2 text-xl"></ion-icon>  Add favorites 
                            </a> 
                        </li>
                        <li>
                          <hr class="-mx-2 my-2 dark:border-gray-800">
                        </li>
                        <li> 
                            <a href="#" class="flex items-center px-3 py-2 text-red-500 hover:bg-red-50 hover:text-red-500 rounded-md dark:hover:bg-red-600">
                              <ion-icon name="stop-circle-outline" class="pr-2 text-xl"></ion-icon>  Unfriend
                            </a> 
                        </li>
                      </ul>
                </div>
            </div>

        </div>

    </div>
    
    <div class="uk-switcher lg:mt-8 mt-4" id="timeline-tab">

        <!-- Timeline -->
        <div class="md:flex md:space-x-6 lg:mx-16">
            <div class="space-y-5 flex-shrink-0 md:w-7/12">

               <!-- create post  -->
               <div class="card lg:mx-0 p-4" uk-toggle="target: #create-post-modal">
                   <div class="flex space-x-3">
                       <img src="assets/images/avatars/avatar-2.jpg" class="w-10 h-10 rounded-full">
                       <input placeholder="What's Your Mind ? Hamse!" class="bg-gray-100 hover:bg-gray-200 flex-1 h-10 px-6 rounded-full"> 
                   </div>
                   <div class="grid grid-flow-col pt-3 -mx-1 -mb-1 font-semibold text-sm">
                        <div class="hover:bg-gray-100 flex items-center p-1.5 rounded-md cursor-pointer"> 
                            <svg class="bg-blue-100 h-9 mr-2 p-1.5 rounded-full text-blue-600 w-9 -my-0.5 hidden lg:block" data-tippy-placement="top" title="Tooltip" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            Photo/Video 
                        </div>
                        <div class="hover:bg-gray-100 flex items-center p-1.5 rounded-md cursor-pointer"> 
                            <svg class="bg-green-100 h-9 mr-2 p-1.5 rounded-full text-green-600 w-9 -my-0.5 hidden lg:block" uk-tooltip="title: Messages ; pos: bottom ;offset:7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" title="" aria-expanded="false"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path></svg>
                            Tag Friend 
                        </div>
                        <div class="hover:bg-gray-100 flex items-center p-1.5 rounded-md cursor-pointer"> 
                            <svg class="bg-red-100 h-9 mr-2 p-1.5 rounded-full text-red-600 w-9 -my-0.5 hidden lg:block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            Fealing /Activity 
                        </div>
                   </div> 
               </div>
       
               <div class="card lg:mx-0 uk-animation-slide-bottom-small">
       
                   <!-- post header-->
                   <div class="flex justify-between items-center lg:p-4 p-2.5">
                       <div class="flex flex-1 items-center space-x-4">
                           <a href="#">
                               <img src="assets/images/avatars/avatar-2.jpg" class="bg-gray-200 border border-white rounded-full w-10 h-10">
                           </a>
                           <div class="flex-1 font-semibold capitalize">
                               <a href="#" class="text-black dark:text-gray-100"> Johnson smith </a>
                               <div class="text-gray-700 flex items-center space-x-2"> 5 <span> hrs </span> <ion-icon name="people"></ion-icon></div>
                           </div>
                       </div>
                     <div>
                       <a href="#"> <i class="icon-feather-more-horizontal text-2xl hover:bg-gray-200 rounded-full p-2 transition -mr-1 dark:hover:bg-gray-700"></i> </a>
                       <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden text-base border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700" 
                       uk-drop="mode: click;pos: bottom-right;animation: uk-animation-slide-bottom-small">
                     
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
                       <a href="assets/images/avatars/avatar-lg-3.jpg">  
                           <img src="assets/images/avatars/avatar-lg-4.jpg" alt="" class="max-h-96 w-full object-cover">
                       </a>
                   </div>
                   
       
                   <div class="p-4 space-y-3"> 
                      
                       <div class="flex space-x-4 lg:font-bold">
                           <a href="#" class="flex items-center space-x-2">
                               <div class="p-2 rounded-full  text-black lg:bg-gray-100 dark:bg-gray-600">
                                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                       <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                   </svg>
                               </div>
                               <div> Like</div>
                           </a>
                           <a href="#" class="flex items-center space-x-2">
                               <div class="p-2 rounded-full  text-black lg:bg-gray-100 dark:bg-gray-600">
                                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                       <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                                   </svg>
                               </div>
                               <div> Comment</div>
                           </a>
                           <a href="#" class="flex items-center space-x-2 flex-1 justify-end">
                               <div class="p-2 rounded-full  text-black lg:bg-gray-100 dark:bg-gray-600">
                                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                       <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                                   </svg>
                               </div>
                               <div> Share</div>
                           </a>
                       </div>
                       <div class="flex items-center space-x-3 pt-2"> 
                           <div class="flex items-center">
                               <img src="assets/images/avatars/avatar-1.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900">
                               <img src="assets/images/avatars/avatar-4.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                               <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                           </div>
                           <div class="dark:text-gray-100">
                               Liked <strong> Johnson</strong> and <strong> 209 Others </strong>
                           </div>
                       </div>
       
                       <div class="border-t py-4 space-y-4 dark:border-gray-600">
                           <div class="flex">
                               <div class="w-10 h-10 rounded-full relative flex-shrink-0">
                                   <img src="assets/images/avatars/avatar-1.jpg" alt="" class="absolute h-full rounded-full w-full">
                               </div>
                               <div>
                                   <div class="text-gray-700 py-2 px-3 rounded-md bg-gray-100 relative lg:ml-5 ml-2 lg:mr-12  dark:bg-gray-800 dark:text-gray-100">
                                       <p class="leading-6">In ut odio libero vulputate <urna class="i uil-heart"></urna> <i
                                               class="uil-grin-tongue-wink"> </i> </p>
                                       <div class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-800"></div>
                                   </div>
                                   <div class="text-sm flex items-center space-x-3 mt-2 ml-5">
                                       <a href="#" class="text-red-600"> <i class="uil-heart"></i> Love </a>
                                       <a href="#"> Replay </a>
                                       <span> 3d </span>
                                   </div>
                               </div>
                           </div>
                           <div class="flex">
                               <div class="w-10 h-10 rounded-full relative flex-shrink-0">
                                   <img src="assets/images/avatars/avatar-1.jpg" alt="" class="absolute h-full rounded-full w-full">
                               </div>
                               <div>
                                   <div class="text-gray-700 py-2 px-3 rounded-md bg-gray-100 relative lg:ml-5 ml-2 lg:mr-12  dark:bg-gray-800 dark:text-gray-100">
                                       <p class="leading-6"> sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. David !<i class="uil-grin-tongue-wink-alt"></i> </p>
                                       <div class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-800"></div>
                                   </div>
                                   <div class="text-xs flex items-center space-x-3 mt-2 ml-5">
                                       <a href="#" class="text-red-600"> <i class="uil-heart"></i> Love </a>
                                       <a href="#"> Replay </a>
                                       <span> 3d </span>
                                   </div>
                               </div>
                           </div>
                          
                       </div>
                       
                       <a href="#" class="hover:text-blue-600 hover:underline">  Veiw 8 more Comments </a>
       
                       <div class="bg-gray-100 rounded-full relative dark:bg-gray-800 border-t">
                           <input placeholder="Add your Comment.." class="bg-transparent max-h-10 shadow-none px-5">
                           <div class="-m-0.5 absolute bottom-0 flex items-center right-3 text-xl">
                               <a href="#">
                                   <ion-icon name="happy-outline" class="hover:bg-gray-200 p-1.5 rounded-full"></ion-icon>
                               </a>
                               <a href="#">
                                   <ion-icon name="image-outline" class="hover:bg-gray-200 p-1.5 rounded-full"></ion-icon>
                               </a>
                               <a href="#">
                                   <ion-icon name="link-outline" class="hover:bg-gray-200 p-1.5 rounded-full"></ion-icon>
                               </a> 
                           </div>
                       </div>
       
                   </div>
       
               </div>
               
               <div class="card lg:mx-0 uk-animation-slide-bottom-small">
       
                   <!-- post header-->
                   <div class="flex justify-between items-center lg:p-4 p-2.5">
                       <div class="flex flex-1 items-center space-x-4">
                           <a href="#">
                               <img src="assets/images/avatars/avatar-2.jpg" class="bg-gray-200 border border-white rounded-full w-10 h-10">
                           </a>
                           <div class="flex-1 font-semibold capitalize">
                               <a href="#" class="text-black dark:text-gray-100"> Johnson smith </a>
                               <div class="text-gray-700 flex items-center space-x-2"> 5 <span> hrs </span> <ion-icon name="people"></ion-icon></div>
                           </div>
                       </div>
                     <div>
                       <a href="#"> <i class="icon-feather-more-horizontal text-2xl hover:bg-gray-200 rounded-full p-2 transition -mr-1 dark:hover:bg-gray-700"></i> </a>
                       <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden text-base border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700" 
                       uk-drop="mode: click;pos: bottom-right;animation: uk-animation-slide-bottom-small">
                     
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
                       <div class="grid grid-cols-2 gap-2 px-5">
       
                           <a href="assets/images/post/img-4.jpg" class="col-span-2">  
                               <img src="assets/images/post/img-4.jpg" alt="" class="rounded-md w-full lg:h-76 object-cover">
                           </a>
                           <a href="assets/images/post/img-4.jpg">  
                               <img src="assets/images/post/img-2.jpg" alt="" class="rounded-md w-full h-full">
                           </a>
                           <a href="assets/images/post/img-4.jpg" class="relative">  
                               <img src="assets/images/post/img-3.jpg" alt="" class="rounded-md w-full h-full">
                               <div class="absolute bg-gray-900 bg-opacity-30 flex justify-center items-center text-white rounded-md inset-0 text-2xl"> + 15 more </div>
                           </a>
       
                       </div>
                   </div>
       
                   <div class="p-4 space-y-3"> 
                      
                       <div class="flex space-x-4 lg:font-bold">
                           <a href="#" class="flex items-center space-x-2">
                               <div class="p-2 rounded-full  text-black lg:bg-gray-100 dark:bg-gray-600">
                                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                       <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                   </svg>
                               </div>
                               <div> Like</div>
                           </a>
                           <a href="#" class="flex items-center space-x-2">
                               <div class="p-2 rounded-full  text-black lg:bg-gray-100 dark:bg-gray-600">
                                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                       <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                                   </svg>
                               </div>
                               <div> Comment</div>
                           </a>
                           <a href="#" class="flex items-center space-x-2 flex-1 justify-end">
                               <div class="p-2 rounded-full  text-black lg:bg-gray-100 dark:bg-gray-600">
                                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                       <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                                   </svg>
                               </div>
                               <div> Share</div>
                           </a>
                       </div>
                       <div class="flex items-center space-x-3 pt-2"> 
                           <div class="flex items-center">
                               <img src="assets/images/avatars/avatar-1.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900">
                               <img src="assets/images/avatars/avatar-4.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                               <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                           </div>
                           <div class="dark:text-gray-100">
                               Liked <strong> Johnson</strong> and <strong> 209 Others </strong>
                           </div>
                       </div>
       
                       <div class="border-t py-4 space-y-4 dark:border-gray-600">
                           <div class="flex">
                               <div class="w-10 h-10 rounded-full relative flex-shrink-0">
                                   <img src="assets/images/avatars/avatar-1.jpg" alt="" class="absolute h-full rounded-full w-full">
                               </div>
                               <div>
                                   <div class="text-gray-700 py-2 px-3 rounded-md bg-gray-100 relative lg:ml-5 ml-2 lg:mr-12 dark:bg-gray-800 dark:text-gray-100">
                                       <p class="leading-6">In ut odio libero vulputate <urna class="i uil-heart"></urna> <i
                                               class="uil-grin-tongue-wink"> </i> </p>
                                       <div class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-800"></div>
                                   </div>
                                   <div class="text-sm flex items-center space-x-3 mt-2 ml-5">
                                       <a href="#" class="text-red-600"> <i class="uil-heart"></i> Love </a>
                                       <a href="#"> Replay </a>
                                       <span> 3d </span>
                                   </div>
                               </div>
                           </div>
                           <div class="flex">
                               <div class="w-10 h-10 rounded-full relative flex-shrink-0">
                                   <img src="assets/images/avatars/avatar-1.jpg" alt="" class="absolute h-full rounded-full w-full">
                               </div>
                               <div>
                                   <div class="text-gray-700 py-2 px-3 rounded-md bg-gray-100 relative lg:ml-5 ml-2 lg:mr-12 dark:bg-gray-800 dark:text-gray-100">
                                       <p class="leading-6"> sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. David !<i class="uil-grin-tongue-wink-alt"></i> </p>
                                       <div class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-800"></div>
                                   </div>
                                   <div class="text-xs flex items-center space-x-3 mt-2 ml-5">
                                       <a href="#" class="text-red-600"> <i class="uil-heart"></i> Love </a>
                                       <a href="#"> Replay </a>
                                       <span> 3d </span>
                                   </div>
                               </div>
                           </div>
                          
                       </div>
                       
                       <a href="#" class="hover:text-blue-600 hover:underline">  Veiw 8 more Comments </a>
       
                       <div class="bg-gray-100 rounded-full relative dark:bg-gray-800 border-t">
                           <input placeholder="Add your Comment.." class="bg-transparent max-h-10 shadow-none px-5">
                           <div class="-m-0.5 absolute bottom-0 flex items-center right-3 text-xl">
                               <a href="#">
                                   <ion-icon name="happy-outline" class="hover:bg-gray-200 p-1.5 rounded-full"></ion-icon>
                               </a>
                               <a href="#">
                                   <ion-icon name="image-outline" class="hover:bg-gray-200 p-1.5 rounded-full"></ion-icon>
                               </a>
                               <a href="#">
                                   <ion-icon name="link-outline" class="hover:bg-gray-200 p-1.5 rounded-full"></ion-icon>
                               </a> 
                           </div>
                       </div>
       
                   </div>
       
               </div> 
       
               <div class="card lg:mx-0 uk-animation-slide-bottom-small">
       
                   <!-- post header-->
                   <div class="flex justify-between items-center lg:p-4 p-2.5">
                       <div class="flex flex-1 items-center space-x-4">
                           <a href="#">
                               <img src="assets/images/avatars/avatar-2.jpg" class="bg-gray-200 border border-white rounded-full w-10 h-10">
                           </a>
                           <div class="flex-1 font-semibold capitalize">
                               <a href="#" class="text-black dark:text-gray-100"> Johnson smith </a>
                               <div class="text-gray-700 flex items-center space-x-2"> 5 <span> hrs </span> <ion-icon name="people"></ion-icon></div>
                           </div>
                       </div>
                     <div>
                       <a href="#"> <i class="icon-feather-more-horizontal text-2xl hover:bg-gray-200 rounded-full p-2 transition -mr-1 dark:hover:bg-gray-700"></i> </a>
                       <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden text-base border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700" 
                       uk-drop="mode: click;pos: bottom-right;animation: uk-animation-slide-bottom-small">
                     
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
       
       
                   <div class="p-5 pt-0 border-b dark:border-gray-700">
       
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim laoreet dolore magna aliquam erat volutpat
       
                   </div>
                   
       
                   <div class="p-4 space-y-3"> 
                      
                       <div class="flex space-x-4 lg:font-bold">
                           <a href="#" class="flex items-center space-x-2">
                               <div class="p-2 rounded-full  text-black lg:bg-gray-100 dark:bg-gray-600 ">
                                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                       <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                   </svg>
                               </div>
                               <div> Like</div>
                           </a>
                           <a href="#" class="flex items-center space-x-2">
                               <div class="p-2 rounded-full  text-black lg:bg-gray-100 dark:bg-gray-600">
                                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                       <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                                   </svg>
                               </div>
                               <div> Comment</div>
                           </a>
                           <a href="#" class="flex items-center space-x-2 flex-1 justify-end">
                               <div class="p-2 rounded-full  text-black lg:bg-gray-100 dark:bg-gray-600">
                                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                       <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                                   </svg>
                               </div>
                               <div> Share</div>
                           </a>
                       </div>
                       <div class="flex items-center space-x-3 pt-2"> 
                           <div class="flex items-center">
                               <img src="assets/images/avatars/avatar-1.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900">
                               <img src="assets/images/avatars/avatar-4.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                               <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                           </div>
                           <div class="dark:text-gray-100">
                               Liked <strong> Johnson</strong> and <strong> 209 Others </strong>
                           </div>
                       </div>
       
                       <div class="border-t py-4 space-y-4 dark:border-gray-600">
                           <div class="flex">
                               <div class="w-10 h-10 rounded-full relative flex-shrink-0">
                                   <img src="assets/images/avatars/avatar-1.jpg" alt="" class="absolute h-full rounded-full w-full">
                               </div>
                               <div>
                                   <div class="text-gray-700 py-2 px-3 rounded-md bg-gray-100 relative lg:ml-5 ml-2 lg:mr-12 dark:bg-gray-800 dark:text-gray-100">
                                       <p class="leading-6">In ut odio libero vulputate <urna class="i uil-heart"></urna> <i
                                               class="uil-grin-tongue-wink"> </i> </p>
                                       <div class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-800"></div>
                                   </div>
                                   <div class="text-sm flex items-center space-x-3 mt-2 ml-5">
                                       <a href="#" class="text-red-600"> <i class="uil-heart"></i> Love </a>
                                       <a href="#"> Replay </a>
                                       <span> 3d </span>
                                   </div>
                               </div>
                           </div>
                           <div class="flex">
                               <div class="w-10 h-10 rounded-full relative flex-shrink-0">
                                   <img src="assets/images/avatars/avatar-1.jpg" alt="" class="absolute h-full rounded-full w-full">
                               </div>
                               <div>
                                   <div class="text-gray-700 py-2 px-3 rounded-md bg-gray-100 relative lg:ml-5 ml-2 lg:mr-12 dark:bg-gray-800 dark:text-gray-100">
                                       <p class="leading-6"> sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. David !<i class="uil-grin-tongue-wink-alt"></i> </p>
                                       <div class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-800"></div>
                                   </div>
                                   <div class="text-xs flex items-center space-x-3 mt-2 ml-5">
                                       <a href="#" class="text-red-600"> <i class="uil-heart"></i> Love </a>
                                       <a href="#"> Replay </a>
                                       <span> 3d </span>
                                   </div>
                               </div>
                           </div>
                          
                       </div>
                       
                       <a href="#" class="hover:text-blue-600 hover:underline">  Veiw 8 more Comments </a>
       
                       <div class="bg-gray-100 rounded-full relative dark:bg-gray-800 border-t">
                           <input placeholder="Add your Comment.." class="bg-transparent max-h-10 shadow-none px-5">
                           <div class="-m-0.5 absolute bottom-0 flex items-center right-3 text-xl">
                               <a href="#">
                                   <ion-icon name="happy-outline" class="hover:bg-gray-200 p-1.5 rounded-full"></ion-icon>
                               </a>
                               <a href="#">
                                   <ion-icon name="image-outline" class="hover:bg-gray-200 p-1.5 rounded-full"></ion-icon>
                               </a>
                               <a href="#">
                                   <ion-icon name="link-outline" class="hover:bg-gray-200 p-1.5 rounded-full"></ion-icon>
                               </a> 
                           </div>
                       </div>
       
                   </div>
       
               </div>  
               
               <div class="card lg:mx-0 uk-animation-slide-bottom-small">
       
                   <!-- post header-->
                   <div class="flex justify-between items-center lg:p-4 p-2.5">
                       <div class="flex flex-1 items-center space-x-4">
                           <a href="#">
                               <img src="assets/images/avatars/avatar-2.jpg" class="bg-gray-200 border border-white rounded-full w-10 h-10">
                           </a>
                           <div class="flex-1 font-semibold capitalize">
                               <a href="#" class="text-black dark:text-gray-100"> Johnson smith </a>
                               <div class="text-gray-700 flex items-center space-x-2"> 5 <span> hrs </span> <ion-icon name="people"></ion-icon></div>
                           </div>
                       </div>
                     <div>
                       <a href="#"> <i class="icon-feather-more-horizontal text-2xl hover:bg-gray-200 rounded-full p-2 transition -mr-1 dark:hover:bg-gray-700"></i> </a>
                       <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden text-base border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700" 
                       uk-drop="mode: click;pos: bottom-right;animation: uk-animation-slide-bottom-small">
                     
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
       
                   <div class="p-4 space-y-3"> 
                      
                       <div class="flex space-x-4 lg:font-bold">
                           <a href="#" class="flex items-center space-x-2">
                               <div class="p-2 rounded-full  text-black lg:bg-gray-100 dark:bg-gray-600">
                                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                       <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                   </svg>
                               </div>
                               <div> Like</div>
                           </a>
                           <a href="#" class="flex items-center space-x-2">
                               <div class="p-2 rounded-full  text-black lg:bg-gray-100 dark:bg-gray-600">
                                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                       <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                                   </svg>
                               </div>
                               <div> Comment</div>
                           </a>
                           <a href="#" class="flex items-center space-x-2 flex-1 justify-end">
                               <div class="p-2 rounded-full  text-black lg:bg-gray-100 dark:bg-gray-600">
                                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                       <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                                   </svg>
                               </div>
                               <div> Share</div>
                           </a>
                       </div>
                       <div class="flex items-center space-x-3 pt-2"> 
                           <div class="flex items-center">
                               <img src="assets/images/avatars/avatar-1.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900">
                               <img src="assets/images/avatars/avatar-4.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                               <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                           </div>
                           <div class="dark:text-gray-100">
                               Liked <strong> Johnson</strong> and <strong> 209 Others </strong>
                           </div>
                       </div>
       
                       <div class="border-t py-4 space-y-4 dark:border-gray-600">
                           <div class="flex">
                               <div class="w-10 h-10 rounded-full relative flex-shrink-0">
                                   <img src="assets/images/avatars/avatar-1.jpg" alt="" class="absolute h-full rounded-full w-full">
                               </div>
                               <div>
                                   <div class="text-gray-700 py-2 px-3 rounded-md bg-gray-100 relative lg:ml-5 ml-2 lg:mr-12 dark:bg-gray-800 dark:text-gray-100">
                                       <p class="leading-6">In ut odio libero vulputate <urna class="i uil-heart"></urna> <i
                                               class="uil-grin-tongue-wink"> </i> </p>
                                       <div class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-800"></div>
                                   </div>
                                   <div class="text-sm flex items-center space-x-3 mt-2 ml-5">
                                       <a href="#" class="text-red-600"> <i class="uil-heart"></i> Love </a>
                                       <a href="#"> Replay </a>
                                       <span> 3d </span>
                                   </div>
                               </div>
                           </div>
                           <div class="flex">
                               <div class="w-10 h-10 rounded-full relative flex-shrink-0">
                                   <img src="assets/images/avatars/avatar-1.jpg" alt="" class="absolute h-full rounded-full w-full">
                               </div>
                               <div>
                                   <div class="text-gray-700 py-2 px-3 rounded-md bg-gray-100 relative lg:ml-5 ml-2 lg:mr-12 dark:bg-gray-800 dark:text-gray-100">
                                       <p class="leading-6"> sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. David !<i class="uil-grin-tongue-wink-alt"></i> </p>
                                       <div class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-800"></div>
                                   </div>
                                   <div class="text-xs flex items-center space-x-3 mt-2 ml-5">
                                       <a href="#" class="text-red-600"> <i class="uil-heart"></i> Love </a>
                                       <a href="#"> Replay </a>
                                       <span> 3d </span>
                                   </div>
                               </div>
                           </div>
                          
                       </div>
                       
                       <a href="#" class="hover:text-blue-600 hover:underline">  Veiw 8 more Comments </a>
       
                       <div class="bg-gray-100 rounded-full relative dark:bg-gray-800 border-t">
                           <input placeholder="Add your Comment.." class="bg-transparent max-h-10 shadow-none px-5">
                           <div class="-m-0.5 absolute bottom-0 flex items-center right-3 text-xl">
                               <a href="#">
                                   <ion-icon name="happy-outline" class="hover:bg-gray-200 p-1.5 rounded-full"></ion-icon>
                               </a>
                               <a href="#">
                                   <ion-icon name="image-outline" class="hover:bg-gray-200 p-1.5 rounded-full"></ion-icon>
                               </a>
                               <a href="#">
                                   <ion-icon name="link-outline" class="hover:bg-gray-200 p-1.5 rounded-full"></ion-icon>
                               </a> 
                           </div>
                       </div>
       
                   </div>
       
               </div> 
       
               <div class="flex justify-center mt-6">
                   <a href="#" class="bg-white font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white">
                       Load more ..</a>
               </div>
           

            </div>

            <!-- Sidebar -->
            <div class="w-full space-y-6">
            
                <div class="widget card p-5">
                    <h4 class="text-lg font-semibold"> About </h4>
                    <ul class="text-gray-600 space-y-3 mt-3">
                        <li class="flex items-center space-x-2"> 
                            <ion-icon name="home-sharp" class="rounded-full bg-gray-200 text-xl p-1 mr-3"></ion-icon>
                            Live In <strong> Cairo , Eygept  </strong>
                        </li>
                        <li class="flex items-center space-x-2"> 
                            <ion-icon name="globe" class="rounded-full bg-gray-200 text-xl p-1 mr-3"></ion-icon>
                            From <strong> Aden , Yemen  </strong>
                        </li>
                        <li class="flex items-center space-x-2"> 
                            <ion-icon name="heart-sharp" class="rounded-full bg-gray-200 text-xl p-1 mr-3"></ion-icon>
                            From <strong> Relationship  </strong>
                        </li>
                        <li class="flex items-center space-x-2"> 
                            <ion-icon name="logo-rss" class="rounded-full bg-gray-200 text-xl p-1 mr-3"></ion-icon>
                            Flowwed By <strong> 3,240 People </strong>
                        </li>                                
                    </ul>
                    <div class="gap-3 grid grid-cols-3 mt-4">
                      <img src="assets/images/avatars/avatar-lg-2.jpg" alt="" class="object-cover rounded-lg col-span-full">
                      <img src="assets/images/avatars/avatar-2.jpg" alt="" class="rounded-lg">
                      <img src="assets/images/avatars/avatar-4.jpg" alt="" class="rounded-lg">
                      <img src="assets/images/avatars/avatar-5.jpg" alt="" class="rounded-lg"> 
                  </div>
                  <a href="#" class="button gray mt-3 w-full"> Edit </a>
                </div>
            
                <div class="widget card p-5 border-t">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h4 class="text-lg font-semibold"> Friends </h4>
                            <p class="text-sm"> 3,4510 Friends</p>
                        </div>
                        <a href="#" class="text-blue-600 ">See all</a>
                    </div>
                    <div class="grid grid-cols-3 gap-3 text-gray-600 font-semibold">
                        <a href="#">  
                            <div class="avatar relative rounded-md overflow-hidden w-full h-24 mb-2"> 
                                <img src="assets/images/avatars/avatar-1.jpg" alt="" class="w-full h-full object-cover absolute">
                            </div>
                            <div class="text-sm truncate"> Dennis Han </div>
                        </a>
                        <a href="#">  
                            <div class="avatar relative rounded-md overflow-hidden w-full h-24 mb-2"> 
                                <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-full h-full object-cover absolute">
                            </div>
                            <div class="text-sm truncate"> Erica Jones </div>
                        </a>
                        <a href="#">  
                            <div class="avatar relative rounded-md overflow-hidden w-full h-24 mb-2"> 
                                <img src="assets/images/avatars/avatar-3.jpg" alt="" class="w-full h-full object-cover absolute">
                            </div>
                            <div class="text-sm truncate"> Stella Johnson </div>
                        </a>
                        <a href="#">  
                            <div class="avatar relative rounded-md overflow-hidden w-full h-24 mb-2"> 
                                <img src="assets/images/avatars/avatar-4.jpg" alt="" class="w-full h-full object-cover absolute">
                            </div>
                            <div class="text-sm truncate"> Alex Dolgove</div>
                        </a>
                        <a href="#">  
                            <div class="avatar relative rounded-md overflow-hidden w-full h-24 mb-2"> 
                                <img src="assets/images/avatars/avatar-5.jpg" alt="" class="w-full h-full object-cover absolute">
                            </div>
                            <div class="text-sm truncate"> Jonathan Ali </div>
                        </a>
                        <a href="#">  
                            <div class="avatar relative rounded-md overflow-hidden w-full h-24 mb-2"> 
                                <img src="assets/images/avatars/avatar-6.jpg" alt="" class="w-full h-full object-cover absolute">
                            </div>
                            <div class="text-sm truncate"> Erica Han </div>
                        </a>
                    </div>
                  <a href="#" class="button gray mt-3 w-full">  See all </a>
                </div>

                <div class="widget card p-5 border-t">
                    <div class="flex items-center justify-between mb-2">
                        <div>
                            <h4 class="text-lg font-semibold"> Groups </h4>
                        </div>
                        <a href="#" class="text-blue-600 "> See all</a>
                    </div>
                    <div>
                  
                      <div class="flex items-center space-x-4 rounded-md -mx-2 p-2 hover:bg-gray-50">
                          <a href="timeline-group.html" class="w-12 h-12 flex-shrink-0 overflow-hidden rounded-full relative">
                              <img src="assets/images/group/group-3.jpg" class="absolute w-full h-full inset-0 " alt="">
                          </a>
                          <div class="flex-1">
                              <a href="timeline-page.html" class="text-base font-semibold capitalize"> Graphic Design  </a>
                              <div class="text-sm text-gray-500 mt-0.5"> 345K  Following</div>
                          </div>
                          <a href="timeline-page.html" class="flex items-center justify-center h-8 px-3 rounded-md text-sm border font-semibold bg-blue-500 text-white">
                              Join
                          </a>
                      </div>
                      <div class="flex items-center space-x-4 rounded-md -mx-2 p-2 hover:bg-gray-50">
                          <a href="timeline-group.html" class="w-12 h-12 flex-shrink-0 overflow-hidden rounded-full relative">
                              <img src="assets/images/group/group-4.jpg" class="absolute w-full h-full inset-0 " alt="">
                          </a>
                          <div class="flex-1">
                              <a href="timeline-page.html" class="text-base font-semibold capitalize"> Mountain Riders </a>
                              <div class="text-sm text-gray-500 mt-0.5"> 452k Following </div>
                          </div>
                          <a href="timeline-page.html" class="flex items-center justify-center h-8 px-3 rounded-md text-sm border font-semibold bg-blue-500 text-white">
                              Join
                          </a>
                      </div>
                      <div class="flex items-center space-x-4 rounded-md -mx-2 p-2 hover:bg-gray-50">
                          <a href="timeline-group.html" class="w-12 h-12 flex-shrink-0 overflow-hidden rounded-full relative">
                              <img src="assets/images/group/group-2.jpg" class="absolute w-full h-full inset-0" alt="">
                          </a>
                          <div class="flex-1">
                              <a href="timeline-page.html" class="text-base font-semibold capitalize">  Coffee Addicts  </a>
                              <div class="text-sm text-gray-500 mt-0.5"> 845K Following</div>
                          </div>
                          <a href="timeline-page.html" class="flex items-center justify-center h-8 px-3 rounded-md text-sm border font-semibold bg-blue-500 text-white">
                              Join
                          </a>
                      </div>
                      <div class="flex items-center space-x-4 rounded-md -mx-2 p-2 hover:bg-gray-50">
                          <a href="timeline-group.html" class="w-12 h-12 flex-shrink-0 overflow-hidden rounded-full relative">
                              <img src="assets/images/group/group-1.jpg" class="absolute w-full h-full inset-0" alt="">
                          </a>
                          <div class="flex-1">
                              <a href="timeline-page.html" class="text-base font-semibold capitalize"> Architecture    </a>
                              <div class="text-sm text-gray-500 mt-0.5"> 237K Following</div>
                          </div>
                          <a href="timeline-page.html" class="flex items-center justify-center h-8 px-3 rounded-md text-sm border font-semibold bg-blue-500 text-white">
                              Join
                          </a>
                      </div>
              
                    </div>
                </div>

            </div>
        </div>
              
        <!-- Friends  -->
        <div class="card md:p-6 p-2 max-w-3xl mx-auto">

            <h2 class="text-xl font-bold"> Friends</h2>

            <nav class="responsive-nav border-b">
                <ul>
                    <li class="active"><a href="#" class="lg:px-2"> All Friends <span> 3,4510 </span> </a></li>
                    <li><a href="#" class="lg:px-2"> Recently added </a></li>
                    <li><a href="#" class="lg:px-2"> Family </a></li>
                    <li><a href="#" class="lg:px-2"> University </a></li> 
                </ul>
            </nav>

            <div class="grid md:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-x-2 gap-y-4 mt-3">

                <div class="card p-2">
                    <a href="timeline.html">
                        <img src="assets/images/avatars/avatar-2.jpg" class="h-36 object-cover rounded-md shadow-sm w-full">
                    </a>
                    <div class="pt-3 px-1">
                        <a href="timeline.html" class="text-base font-semibold mb-0.5">  James Lewis </a>
                        <p class="font-medium text-sm">843K Following </p>
                        <button class="bg-blue-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1">
                            Following
                        </button>
                    </div>
                </div>
                <div class="card p-2">
                    <a href="timeline.html">
                        <img src="assets/images/avatars/avatar-3.jpg" class="h-36 object-cover rounded-md shadow-sm w-full">
                    </a>
                    <div class="pt-3 px-1">
                        <a href="timeline.html" class="text-base font-semibold mb-0.5"> Monroe Parker  </a>
                        <p class="font-medium text-sm">843K Following </p>
                        <button class="bg-blue-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1">
                            Following
                        </button>
                    </div>
                </div>
                <div class="card p-2">
                    <a href="timeline.html">
                        <img src="assets/images/avatars/avatar-4.jpg" class="h-36 object-cover rounded-md shadow-sm w-full">
                    </a>
                    <div class="pt-3 px-1">
                        <a href="timeline.html" class="text-base font-semibold mb-0.5">  Martin Gray  </a>
                        <p class="font-medium text-sm">843K Following </p>
                        <button class="bg-blue-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1">
                            Following
                        </button>
                    </div>
                </div>
                <div class="card p-2">
                    <a href="timeline.html">
                        <img src="assets/images/avatars/avatar-7.jpg" class="h-36 object-cover rounded-md shadow-sm w-full">
                    </a>
                    <div class="pt-3 px-1">
                        <a href="timeline.html" class="text-base font-semibold mb-0.5">  Alex Michael </a>
                        <p class="font-medium text-sm">843K Following </p>
                        <button class="bg-blue-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1">
                            Following
                        </button>
                    </div>
                </div>
                <div class="card p-2">
                    <a href="timeline.html">
                        <img src="assets/images/avatars/avatar-5.jpg" class="h-36 object-cover rounded-md shadow-sm w-full">
                    </a>
                    <div class="pt-3 px-1">
                        <a href="timeline.html" class="text-base font-semibold mb-0.5"> Jesse Stevens  </a>
                        <p class="font-medium text-sm">843K Following </p>
                        <button class="bg-blue-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1">
                            Following
                        </button>
                    </div>
                </div>
                <div class="card p-2">
                    <a href="timeline.html">
                        <img src="assets/images/avatars/avatar-6.jpg" class="h-36 object-cover rounded-md shadow-sm w-full">
                    </a>
                    <div class="pt-3 px-1">
                        <a href="timeline.html" class="text-base font-semibold mb-0.5"> Erica Jones  </a>
                        <p class="font-medium text-sm">843K Following </p>
                        <button class="bg-blue-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1">
                            Following
                        </button>
                    </div>
                </div>
                <div class="card p-2">
                    <a href="timeline.html">
                        <img src="assets/images/avatars/avatar-2.jpg" class="h-36 object-cover rounded-md shadow-sm w-full">
                    </a>
                    <div class="pt-3 px-1">
                        <a href="timeline.html" class="text-base font-semibold mb-0.5">  James Lewis </a>
                        <p class="font-medium text-sm">843K Following </p>
                        <button class="bg-blue-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1">
                            Following
                        </button>
                    </div>
                </div>
                <div class="card p-2">
                    <a href="timeline.html">
                        <img src="assets/images/avatars/avatar-3.jpg" class="h-36 object-cover rounded-md shadow-sm w-full">
                    </a>
                    <div class="pt-3 px-1">
                        <a href="timeline.html" class="text-base font-semibold mb-0.5"> Monroe Parker  </a>
                        <p class="font-medium text-sm">843K Following </p>
                        <button class="bg-blue-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1">
                            Following
                        </button>
                    </div>
                </div>

            </div>
                 
            <div class="flex justify-center mt-6">
                <a href="#" class="bg-white font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white">
                    Load more ..</a>
            </div>

        </div>

        <!-- Photos  -->
        <div class="card md:p-6 p-2 max-w-3xl mx-auto">

            <div class="flex justify-between items-start relative md:mb-4 mb-3">
                <div class="flex-1">
                    <h2 class="text-xl font-bold"> Photos </h2>
                    <nav class="responsive-nav style-2 md:m-0 -mx-4">
                        <ul>
                            <li class="active"><a href="#">  Photos of you  <span> 230</span> </a></li>
                            <li><a href="#"> Recently added </a></li>
                            <li><a href="#"> Family </a></li>
                            <li><a href="#"> University </a></li>
                            <li><a href="#"> Albums </a></li>
                        </ul>
                    </nav>
                </div>
                <a href="#offcanvas-create" uk-toggle class="flex items-center justify-center z-10 h-10 w-10 rounded-full bg-blue-600 text-white absolute right-0"
                data-tippy-placement="left" title="Create New Album">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                </a>
            </div>

            <div class="grid md:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-3 mt-5">
                <div>
                    <div class="bg-green-400 max-w-full lg:h-44 h-36 rounded-lg relative overflow-hidden shadow uk-transition-toggle">
                        <img src="assets/images/post/img-1.jpg" class="w-full h-full absolute object-cover inset-0">
                        <!-- overly-->
                        <div class="-bottom-12 absolute bg-gradient-to-b from-transparent h-1/2 to-gray-800 uk-transition-slide-bottom-small w-full"></div>
                        <div class="absolute bottom-0 w-full p-3 text-white uk-transition-slide-bottom-small">
                            <div class="text-base"> Image description  </div>
                            <div class="flex justify-between text-xs">
                               <a href="#">  Like</a>
                               <a href="#">  Comment </a>
                               <a href="#">  Share </a> 
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="bg-gray-200 max-w-full lg:h-44 h-36 rounded-lg relative overflow-hidden shadow uk-transition-toggle">
                        <img src="assets/images/post/img-2.jpg" class="w-full h-full absolute object-cover inset-0">
                        <!-- overly-->
                        <div class="-bottom-12 absolute bg-gradient-to-b from-transparent h-1/2 to-gray-800 uk-transition-slide-bottom-small w-full"></div>
                        <div class="absolute bottom-0 w-full p-3 text-white uk-transition-slide-bottom-small">
                            <div class="text-base"> Image description  </div>
                            <div class="flex justify-between text-xs">
                               <a href="#">  Like</a>
                               <a href="#">  Comment </a>
                               <a href="#">  Share </a> 
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="bg-gray-200 max-w-full lg:h-44 h-36 rounded-lg relative overflow-hidden shadow uk-transition-toggle">
                        <img src="assets/images/avatars/avatar-3.jpg" class="w-full h-full absolute object-cover inset-0">
                        <!-- overly-->
                        <div class="-bottom-12 absolute bg-gradient-to-b from-transparent h-1/2 to-gray-800 uk-transition-slide-bottom-small w-full"></div>
                        <div class="absolute bottom-0 w-full p-3 text-white uk-transition-slide-bottom-small">
                            <div class="text-base"> Image description  </div>
                            <div class="flex justify-between text-xs">
                               <a href="#">  Like</a>
                               <a href="#">  Comment </a>
                               <a href="#">  Share </a> 
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="bg-gray-200 max-w-full lg:h-44 h-36 rounded-lg relative overflow-hidden shadow uk-transition-toggle">
                        <img src="assets/images/post/img-4.jpg" class="w-full h-full absolute object-cover inset-0">
                        <!-- overly-->
                        <div class="-bottom-12 absolute bg-gradient-to-b from-transparent h-1/2 to-gray-800 uk-transition-slide-bottom-small w-full"></div>
                        <div class="absolute bottom-0 w-full p-3 text-white uk-transition-slide-bottom-small">
                            <div class="text-base"> Image description  </div>
                            <div class="flex justify-between text-xs">
                               <a href="#">  Like</a>
                               <a href="#">  Comment </a>
                               <a href="#">  Share </a> 
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="bg-gray-200 max-w-full lg:h-44 h-36 rounded-lg relative overflow-hidden shadow uk-transition-toggle">
                        <img src="assets/images/avatars/avatar-7.jpg" class="w-full h-full absolute object-cover inset-0">
                        <!-- overly-->
                        <div class="-bottom-12 absolute bg-gradient-to-b from-transparent h-1/2 to-gray-800 uk-transition-slide-bottom-small w-full"></div>
                        <div class="absolute bottom-0 w-full p-3 text-white uk-transition-slide-bottom-small">
                            <div class="text-base"> Image description  </div>
                            <div class="flex justify-between text-xs">
                               <a href="#">  Like</a>
                               <a href="#">  Comment </a>
                               <a href="#">  Share </a> 
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="bg-gray-200 max-w-full lg:h-44 h-36 rounded-lg relative overflow-hidden shadow uk-transition-toggle">
                        <img src="assets/images/avatars/avatar-4.jpg" class="w-full h-full absolute object-cover inset-0">
                        <!-- overly-->
                        <div class="-bottom-12 absolute bg-gradient-to-b from-transparent h-1/2 to-gray-800 uk-transition-slide-bottom-small w-full"></div>
                        <div class="absolute bottom-0 w-full p-3 text-white uk-transition-slide-bottom-small">
                            <div class="text-base"> Image description  </div>
                            <div class="flex justify-between text-xs">
                               <a href="#">  Like</a>
                               <a href="#">  Comment </a>
                               <a href="#">  Share </a> 
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="bg-gray-200 max-w-full lg:h-44 h-36 rounded-lg relative overflow-hidden shadow uk-transition-toggle">
                        <img src="assets/images/post/img-1.jpg" class="w-full h-full absolute object-cover inset-0">
                        <!-- overly-->
                        <div class="-bottom-12 absolute bg-gradient-to-b from-transparent h-1/2 to-gray-800 uk-transition-slide-bottom-small w-full"></div>
                        <div class="absolute bottom-0 w-full p-3 text-white uk-transition-slide-bottom-small">
                            <div class="text-base"> Image description  </div>
                            <div class="flex justify-between text-xs">
                               <a href="#">  Like</a>
                               <a href="#">  Comment </a>
                               <a href="#">  Share </a> 
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="bg-gray-200 max-w-full lg:h-44 h-36 rounded-lg relative overflow-hidden shadow uk-transition-toggle">
                        <img src="assets/images/post/img-2.jpg" class="w-full h-full absolute object-cover inset-0">
                        <!-- overly-->
                        <div class="-bottom-12 absolute bg-gradient-to-b from-transparent h-1/2 to-gray-800 uk-transition-slide-bottom-small w-full"></div>
                        <div class="absolute bottom-0 w-full p-3 text-white uk-transition-slide-bottom-small">
                            <div class="text-base"> Image description  </div>
                            <div class="flex justify-between text-xs">
                               <a href="#">  Like</a>
                               <a href="#">  Comment </a>
                               <a href="#">  Share </a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-6">
                <a href="#" class="bg-white dark:bg-gray-900 font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white">
                    Load more ..</a>
            </div>

        </div>

        <!-- Pages  -->
        <div class="card md:p-6 p-2 max-w-3xl mx-auto">

            <h2 class="text-xl font-bold"> Pages</h2>
            <nav class="responsive-nav border-b md:m-0 -mx-4">
                <ul>
                    <li class="active"><a href="#" class="lg:px-2"> Following </a></li>
                    <li><a href="#" class="lg:px-2"> Newest </a></li>
                    <li><a href="#" class="lg:px-2"> My pages</a></li>
                    <li><a href="#" class="lg:px-2"> Suggestions</a></li>
                </ul>
            </nav>

            <div class="grid md:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-4 mt-5">
                
                <div class="card">
                    <a href="timeline-page.html">
                        <img src="assets/images/avatars/avatar-4.jpg" class="h-36 object-cover rounded-t-md shadow-sm w-full">
                    </a>
                    <div class="p-3">
                        <a href="timeline-page.html" class="text-base font-semibold mb-0.5"> John Michael  </a>
                        <p class="font-medium text-sm">843K Following </p>
                        <button class="bg-gray-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md  text-sm">
                            Following
                        </button>
                    </div>
                </div>
               
                <div class="card">
                    <a href="timeline-page.html">
                        <img src="assets/images/avatars/avatar-3.jpg" class="h-36 object-cover rounded-t-md shadow-sm w-full">
                    </a>
                    <div class="p-3">
                        <a href="timeline-page.html" class="text-base font-semibold mb-0.5"> 
                            Alex Dolgove </a>
                        <p class="font-medium text-sm">843K Following </p>
                        <button class="bg-gray-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md  text-sm">
                            Following
                        </button>
                    </div>
                </div>
                
                <div class="card">
                    <a href="timeline-page.html">
                        <img src="assets/images/avatars/avatar-5.jpg" class="h-36 object-cover rounded-t-md shadow-sm w-full">
                    </a>
                    <div class="p-3">
                        <a href="timeline-page.html" class="text-base font-semibold mb-0.5"> Dennis Han  </a>
                        <p class="font-medium text-sm">843K Following </p>
                        <button class="bg-gray-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md  text-sm">
                            Following
                        </button>
                    </div>
                </div>
                <div class="card">
                    <a href="timeline-page.html">
                        <img src="assets/images/avatars/avatar-7.jpg" class="h-36 object-cover rounded-t-md shadow-sm w-full">
                    </a>
                    <div class="p-3">
                        <a href="timeline-page.html" class="text-base font-semibold mb-0.5">  Monroe Parker   </a>
                        <p class="font-medium text-sm">843K Following </p>
                        <button class="bg-gray-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md  text-sm">
                            Following
                        </button>
                    </div>
                </div>
                <div class="card">
                    <a href="timeline-page.html">
                        <img src="assets/images/avatars/avatar-6.jpg" class="h-36 object-cover rounded-t-md shadow-sm w-full">
                    </a>
                    <div class="p-3">
                        <a href="timeline-page.html" class="text-base font-semibold mb-0.5"> Erica Jones </a>
                        <p class="font-medium text-sm">843K Following </p>
                        <button class="bg-gray-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md  text-sm">
                            Following
                        </button>
                    </div>
                </div>
                <div class="card">
                    <a href="timeline-page.html">
                        <img src="assets/images/avatars/avatar-2.jpg" class="h-36 object-cover rounded-t-md shadow-sm w-full">
                    </a>
                    <div class="p-3">
                        <a href="timeline-page.html" class="text-base font-semibold mb-0.5">  Stella Johnson</a>
                        <p class="font-medium text-sm">843K Following </p>
                        <button class="bg-gray-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md  text-sm">
                            Following
                        </button>
                    </div>
                </div>
                <div class="card">
                    <a href="timeline-page.html">
                        <img src="assets/images/avatars/avatar-4.jpg" class="h-36 object-cover rounded-t-md shadow-sm w-full">
                    </a>
                    <div class="p-3">
                        <a href="timeline-page.html" class="text-base font-semibold mb-0.5"> John Michael  </a>
                        <p class="font-medium text-sm">843K Following </p>
                        <button class="bg-gray-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md  text-sm">
                            Following
                        </button>
                    </div>
                </div>
               
                <div class="card">
                    <a href="timeline-page.html">
                        <img src="assets/images/avatars/avatar-3.jpg" class="h-36 object-cover rounded-t-md shadow-sm w-full">
                    </a>
                    <div class="p-3">
                        <a href="timeline-page.html" class="text-base font-semibold mb-0.5"> 
                            Alex Dolgove </a>
                        <p class="font-medium text-sm">843K Following </p>
                        <button class="bg-gray-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md  text-sm">
                            Following
                        </button>
                    </div>
                </div>

            </div>
             
            <div class="flex justify-center mt-6">
                <a href="#" class="bg-white font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white">
                    Load more ..</a>
            </div>
            
        </div>

        <!-- Groups  -->
        <div class="card md:p-6 p-2 max-w-3xl mx-auto">

            <div class="flex justify-between items-start relative md:mb-4 mb-3">
                <div class="flex-1">
                    <h2 class="text-xl font-bold"> Groups </h2>
                    <nav class="responsive-nav style-2 md:m-0 -mx-4">
                        <ul>
                            <li class="active"><a href="#"> Joined <span> 230</span> </a></li>
                            <li><a href="#"> My Groups </a></li>
                            <li><a href="#"> Discover </a></li> 
                        </ul>
                    </nav>
                </div>
                <a href="create-group.html" data-tippy-placement="left" data-tippy="" data-original-title="Create New Album" class="bg-blue-100 font-semibold py-2 px-6 rounded-md text-sm md:mt-0 mt-3 text-blue-600">
                    Create       
                </a>
            </div>

            <div class="grid md:grid-cols-2  grid-cols-2 gap-x-2 gap-y-4 mt-3"> 
                 
                <div class="flex items-center flex-col md:flex-row justify-center p-4 rounded-md shadow hover:shadow-md md:space-x-4">
                    <a href="timeline-group.html" iv="" class="w-16 h-16 flex-shrink-0 overflow-hidden rounded-full relative">
                        <img src="assets/images/group/group-3.jpg" class="absolute w-full h-full inset-0 " alt="">
                    </a>
                    <div class="flex-1">
                        <a href="timeline-page.html" class="text-base font-semibold capitalize">Graphic Design </a>
                        <div class="text-sm text-gray-500"> 54 mutual friends </div>
                    </div>
                    <button class="bg-gray-100 font-semibold py-2 px-3 rounded-md text-sm md:mt-0 mt-3">
                        Following
                    </button>
                </div>
                <div class="flex items-center flex-col md:flex-row justify-center p-4 rounded-md shadow hover:shadow-md md:space-x-4">
                    <a href="timeline-group.html" iv="" class="w-16 h-16 flex-shrink-0 overflow-hidden rounded-full relative">
                        <img src="assets/images/group/group-4.jpg" class="absolute w-full h-full inset-0 " alt="">
                    </a>
                    <div class="flex-1">
                        <a href="timeline-page.html" class="text-base font-semibold capitalize"> Mountain Riders  </a>
                        <div class="text-sm text-gray-500"> 54 mutual friends </div>
                    </div>
                    <button class="bg-gray-100 font-semibold py-2 px-3 rounded-md text-sm md:mt-0 mt-3">
                        Following
                    </button>
                </div>
                <div class="flex items-center flex-col md:flex-row justify-center p-4 rounded-md shadow hover:shadow-md md:space-x-4">
                    <a href="timeline-group.html" iv="" class="w-16 h-16 flex-shrink-0 overflow-hidden rounded-full relative">
                        <img src="assets/images/group/group-2.jpg" class="absolute w-full h-full inset-0 " alt="">
                    </a>
                    <div class="flex-1">
                        <a href="timeline-page.html" class="text-base font-semibold capitalize">  Coffee Addicts  </a>
                        <div class="text-sm text-gray-500"> 54 mutual friends </div>
                    </div>
                    <button class="bg-gray-100 font-semibold py-2 px-3 rounded-md text-sm md:mt-0 mt-3">
                        Following
                    </button>
                </div>
                <div class="flex items-center flex-col md:flex-row justify-center p-4 rounded-md shadow hover:shadow-md md:space-x-4">
                    <a href="timeline-group.html" iv="" class="w-16 h-16 flex-shrink-0 overflow-hidden rounded-full relative">
                        <img src="assets/images/group/group-5.jpg" class="absolute w-full h-full inset-0 " alt="">
                    </a>
                    <div class="flex-1">
                        <a href="timeline-page.html" class="text-base font-semibold capitalize">  Property Rent  </a>
                        <div class="text-sm text-gray-500"> 54 mutual friends </div>
                    </div>
                    <button class="bg-gray-100 font-semibold py-2 px-3 rounded-md text-sm md:mt-0 mt-3">
                        Following
                    </button>
                </div>
                <div class="flex items-center flex-col md:flex-row justify-center p-4 rounded-md shadow hover:shadow-md md:space-x-4">
                    <a href="timeline-group.html" iv="" class="w-16 h-16 flex-shrink-0 overflow-hidden rounded-full relative">
                        <img src="assets/images/group/group-1.jpg" class="absolute w-full h-full inset-0 " alt="">
                    </a>
                    <div class="flex-1">
                        <a href="timeline-page.html" class="text-base font-semibold capitalize"> Architecture </a>
                        <div class="text-sm text-gray-500"> 54 mutual friends </div>
                    </div>
                    <button class="bg-gray-100 font-semibold py-2 px-3 rounded-md text-sm md:mt-0 mt-3">
                        Following
                    </button>
                </div>
                <div class="flex items-center flex-col md:flex-row justify-center p-4 rounded-md shadow hover:shadow-md md:space-x-4">
                    <a href="timeline-group.html" iv="" class="w-16 h-16 flex-shrink-0 overflow-hidden rounded-full relative">
                        <img src="assets/images/group/group-3.jpg" class="absolute w-full h-full inset-0 " alt="">
                    </a>
                    <div class="flex-1">
                        <a href="timeline-page.html" class="text-base font-semibold capitalize">Graphic Design </a>
                        <div class="text-sm text-gray-500"> 54 mutual friends </div>
                    </div>
                    <button class="bg-gray-100 font-semibold py-2 px-3 rounded-md text-sm md:mt-0 mt-3">
                        Following
                    </button>
                </div>
                <div class="flex items-center flex-col md:flex-row justify-center p-4 rounded-md shadow hover:shadow-md md:space-x-4">
                    <a href="timeline-group.html" iv="" class="w-16 h-16 flex-shrink-0 overflow-hidden rounded-full relative">
                        <img src="assets/images/group/group-4.jpg" class="absolute w-full h-full inset-0 " alt="">
                    </a>
                    <div class="flex-1">
                        <a href="timeline-page.html" class="text-base font-semibold capitalize"> Mountain Riders  </a>
                        <div class="text-sm text-gray-500"> 54 mutual friends </div>
                    </div>
                    <button class="bg-gray-100 font-semibold py-2 px-3 rounded-md text-sm md:mt-0 mt-3">
                        Following
                    </button>
                </div>
                <div class="flex items-center flex-col md:flex-row justify-center p-4 rounded-md shadow hover:shadow-md md:space-x-4">
                    <a href="timeline-group.html" iv="" class="w-16 h-16 flex-shrink-0 overflow-hidden rounded-full relative">
                        <img src="assets/images/group/group-2.jpg" class="absolute w-full h-full inset-0 " alt="">
                    </a>
                    <div class="flex-1">
                        <a href="timeline-page.html" class="text-base font-semibold capitalize">  Coffee Addicts  </a>
                        <div class="text-sm text-gray-500"> 54 mutual friends </div>
                    </div>
                    <button class="bg-gray-100 font-semibold py-2 px-3 rounded-md text-sm md:mt-0 mt-3">
                        Following
                    </button>
                </div>
                
            </div>

            <div class="flex justify-center mt-6">
                <a href="#" class="bg-white dark:bg-gray-900 font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white">
                    Load more ..</a>
            </div>

        </div>

         <!-- Videos -->
        <div class="card md:p-6 p-2 max-w-3xl mx-auto">  
            
            <h2 class="text-xl font-semibold"> Friend</h2>
            <nav class="responsive-nav border-b">
                <ul>
                    <li class="active"><a href="#" class="lg:px-2">   Suggestions </a></li>
                    <li><a href="#" class="lg:px-2"> Newest </a></li>
                    <li><a href="#" class="lg:px-2"> My Videos </a></li>
                </ul>
            </nav>

            <div class="grid md:grid-cols-3 grid-cols-2  gap-x-2 gap-y-4 mt-3">  
                <div>
                    <a href="video-watch.html" class="w-full h-36 overflow-hidden rounded-lg relative block">
                        <img src="assets/images/video/img-1.png" alt="" class="w-full h-full absolute inset-0 object-cover">
                        <span class="absolute bg-black bg-opacity-60 bottom-1 font-semibold px-1.5 py-0.5 right-1 rounded text-white text-xs"> 12:21</span>
                        <img src="assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                    </a>
                </div>
                <div>
                    <a href="video-watch.html" class="w-full h-36 overflow-hidden rounded-lg relative block">
                        <img src="assets/images/video/img-2.png" alt="" class="w-full h-full absolute inset-0 object-cover">
                        <span class="absolute bg-black bg-opacity-60 bottom-1 font-semibold px-1.5 py-0.5 right-1 rounded text-white text-xs"> 12:21</span>
                        <img src="assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                    </a>
                </div>
                <div>
                    <a href="video-watch.html" class="w-full h-36 overflow-hidden rounded-lg relative block">
                        <img src="assets/images/video/img-3.png" alt="" class="w-full h-full absolute inset-0 object-cover">
                        <span class="absolute bg-black bg-opacity-60 bottom-1 font-semibold px-1.5 py-0.5 right-1 rounded text-white text-xs"> 12:21</span>
                        <img src="assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                    </a>
                </div>
                <div>
                    <a href="video-watch.html" class="w-full h-36 overflow-hidden rounded-lg relative block">
                        <img src="assets/images/video/img-4.png" alt="" class="w-full h-full absolute inset-0 object-cover">
                        <span class="absolute bg-black bg-opacity-60 bottom-1 font-semibold px-1.5 py-0.5 right-1 rounded text-white text-xs"> 12:21</span>
                        <img src="assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                    </a>
                </div>
                <div>
                    <a href="video-watch.html" class="w-full h-36 overflow-hidden rounded-lg relative block">
                        <img src="assets/images/video/img-5.png" alt="" class="w-full h-full absolute inset-0 object-cover">
                        <span class="absolute bg-black bg-opacity-60 bottom-1 font-semibold px-1.5 py-0.5 right-1 rounded text-white text-xs"> 12:21</span>
                        <img src="assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                    </a>
                    
                </div>
                <div>
                    <a href="video-watch.html" class="w-full h-36 overflow-hidden rounded-lg relative block">
                        <img src="assets/images/video/img-6.png" alt="" class="w-full h-full absolute inset-0 object-cover">
                        <span class="absolute bg-black bg-opacity-60 bottom-1 font-semibold px-1.5 py-0.5 right-1 rounded text-white text-xs"> 12:21</span>
                        <img src="assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                    </a>
                </div>
                <div>
                    <a href="video-watch.html" class="w-full h-36 overflow-hidden rounded-lg relative block">
                        <img src="assets/images/video/img-3.png" alt="" class="w-full h-full absolute inset-0 object-cover">
                        <span class="absolute bg-black bg-opacity-60 bottom-1 font-semibold px-1.5 py-0.5 right-1 rounded text-white text-xs"> 12:21</span>
                        <img src="assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                    </a>
                </div>
                <div>
                    <a href="video-watch.html" class="w-full h-36 overflow-hidden rounded-lg relative block">
                        <img src="assets/images/video/img-2.png" alt="" class="w-full h-full absolute inset-0 object-cover">
                        <span class="absolute bg-black bg-opacity-60 bottom-1 font-semibold px-1.5 py-0.5 right-1 rounded text-white text-xs"> 12:21</span>
                        <img src="assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                    </a>
                </div>
                <div>
                    <a href="video-watch.html" class="w-full h-36 overflow-hidden rounded-lg relative block">
                        <img src="assets/images/video/img-4.png" alt="" class="w-full h-full absolute inset-0 object-cover">
                        <span class="absolute bg-black bg-opacity-60 bottom-1 font-semibold px-1.5 py-0.5 right-1 rounded text-white text-xs"> 12:21</span>
                        <img src="assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                    </a>
                </div>
            </div>

            <div class="flex justify-center mt-6">
                <a href="#" class="bg-white font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white">
                    Load more ..</a>
            </div>
            
        </div>


    </div>

@endsection