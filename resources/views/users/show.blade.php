@extends('layouts.app')

@section('content')
<script src="{{ asset('assets/js/follow.js') }}" defer></script>
    <!-- Profile cover -->
    <div class="profile user-profile">

        <div uk-lightbox class="profiles_banner">
            <a href="{{asset('storage/' . $user->header_bg)}}">
                <img src="{{asset('storage/' . $user->header_bg)}}" alt="">
            </a>
            @auth
            @if(auth()->user()->id == $user->id)
            <div class="profile_action absolute bottom-0 right-0 space-x-1.5 p-3 text-sm z-50 hidden lg:flex">
              <a href="{{ route('avatar') }}" class="flex items-center justify-center h-8 px-3 rounded-md bg-gray-700 bg-opacity-70 text-white space-x-1.5"> 
                  <ion-icon name="create-outline" class="text-xl"></ion-icon>
                  <span> Edit </span>
              </a>
          </div>
          @endif
          @endauth
          
          
        </div>
        <div class="profiles_content">

            <div class="profile_avatar">
                <div uk-lightbox class="profile_avatar_holder">
                    <a href="{{asset('storage/' . $user->avatar)}}">
                        <img src="{{asset('storage/' . $user->avatar)}}" alt="">
                    </a>
                </div>
                <div class="user_status status_online"></div>
                <div class="icon_change_photo" hidden> <ion-icon name="camera" class="text-xl"></ion-icon> </div>
            </div>

            <div class="profile_info">
                <h1 class="text-center">{{$user->name}}</h1>
            <p class="max-w-sm">{{$user->bio}}<br />
                @auth
                    @if(auth()->user()->id == $user->id)
                    <a href="{{ route('profile') }}">Edit</a>
                    @endif
                @endauth
            </p>
            </div>

        </div>

        <div class="flex justify-between lg:border-t border-gray-100 flex-col-reverse lg:flex-row pt-2">
            <nav class="responsive-nav pl-3">
                <ul  uk-switcher="connect: #timeline-tab; animation: uk-animation-fade">
                    <li><a href="#">Posts <span>{{$user->posts()->count();}} </span></a></li>
                    <li><a href="#">Followers <span>{{$user->followers()->count();}} </span></a></li>
                    <li><a href="#">Following <span>{{$user->followings()->count();}} </span></a></li>
                    <li><a href="#">Pages</a></li> 
                    <li><a href="#">Groups</a></li> 
                    <li><a href="#">Videos</a></li> 
                </ul>
            </nav>

            <!-- button actions -->
            <div class="flex items-center space-x-1.5 flex-shrink-0 pr-4 mb-2 justify-center order-1 relative">
                
                @auth
                @if(auth()->user()->id !== $user->id)
                <form method="POST" action="/{{'@' . $user->username }}/follow">
                @csrf
                <button type="submit" class="action-follow flex items-center justify-center h-10 px-5 rounded-md bg-blue-600 text-white space-x-1.5 hover:text-white"> 
                    <span>
                        @if(auth()->user()->isFollowing($user))
                            Unfollow -
                        @else
                            Follow +
                        @endif
                    </span>
                </button>
                </form>
                @endif
                @endauth
               
                <form action="/{{ '@' . $user->username }}/" method="GET">
                <!-- search icon -->
                <a href="#" class="flex items-center justify-center h-10 w-10 rounded-md bg-gray-100" uk-toggle="target: #profile-search;animation: uk-animation-slide-top-small"> 
                  <ion-icon name="search" class="text-xl"></ion-icon>
                </a>
                <!-- search dropdown -->
                <div class="absolute right-3 bg-white z-10 w-full flex items-center border rounded-md"
                    id="profile-search" hidden>
                    <input type="text" name="search" placeholder="Search.." class="flex-1">
                    <ion-icon name="close-outline" class="text-2xl hover:bg-gray-100 p-1 rounded-full mr-2 cursor-pointer" uk-toggle="target: #profile-search;animation: uk-animation-slide-top-small"></ion-icon>
                </div>
                </form>
                
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
                        @auth
                        @if(auth()->user()->id == $user->id)
                        <li> 
                            <a href="{{ route('settings') }}" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                              <ion-icon name="create-outline" class="pr-2 text-xl"></ion-icon>  Account setting 
                            </a> 
                        </li>
                        <li> 
                            <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                              <ion-icon name="notifications-off-outline" class="pr-2 text-lg"></ion-icon>   Disable notifications
                            </a> 
                        </li>
                        @endif
                        @endauth
                        <li> 
                            <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                              <ion-icon name="star-outline"  class="pr-2 text-xl"></ion-icon>  Add favorites 
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
                @auth
                    @include('posts.create')
                @endauth
            
                @if(count($posts) == 0) 
            <p>No posts found.</p>
            @endif
      
            @foreach($posts->reverse() as $post)
              <x-post-card :post="$post" />
            @endforeach 

            <!--
               <div class="flex justify-center mt-6">
                   <a href="#" class="bg-white font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white">
                       Load more ..</a>
               </div>
            -->
           

            </div>

            <!-- Sidebar -->
            <div class="w-full space-y-6">
            
                <div class="widget card p-5">
                    <h4 class="text-lg font-semibold"> About </h4>
                    <ul class="text-gray-600 space-y-3 mt-3">
                        <li class="flex items-center space-x-2"> 
                            <ion-icon name="home-sharp" class="rounded-full bg-gray-200 text-xl p-1 mr-3"></ion-icon>
                            <strong> {{ $user->name }}  </strong>
                        </li>
                        <li class="flex items-center space-x-2"> 
                            <ion-icon name="globe" class="rounded-full bg-gray-200 text-xl p-1 mr-3"></ion-icon>
                            <strong><a href="{{ $user->website }}" target="_blank">{{ $user->website }}</a></strong>
                        </li>
                        <li class="flex items-center space-x-2"> 
                            <ion-icon name="heart-sharp" class="rounded-full bg-gray-200 text-xl p-1 mr-3"></ion-icon>
                            Posts <strong> {{$user->posts()->count();}}  </strong>
                        </li>
                        <li class="flex items-center space-x-2"> 
                            <ion-icon name="logo-rss" class="rounded-full bg-gray-200 text-xl p-1 mr-3"></ion-icon>
                            <strong>Get RSS  link</strong>
                        </li>                                
                    </ul>
                @auth
                @if(auth()->user()->id == $user->id)
                    <a href="{{ route('settings') }}" class="button gray mt-3 w-full"> Edit </a>
                @endif
                @endauth
                </div>
            
                <!-- Pages -->
                <div class="widget card p-5 border-t">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h4 class="text-lg font-semibold"> Pages </h4>
                        </div>
                        <a href="#" class="text-blue-600 ">See all</a>
                    </div>
                    <div class="grid grid-cols-3 gap-3 text-gray-600 font-semibold">


                        <a href="#">  
                            <div class="avatar relative rounded-md overflow-hidden w-full h-24 mb-2"> 
                                <img src="assets/images/avatars/avatar-1.jpg" alt="" class="w-full h-full object-cover absolute">
                            </div>
                            <div class="text-sm truncate"> Goldfish </div>
                        </a>
                        <a href="#">  
                            <div class="avatar relative rounded-md overflow-hidden w-full h-24 mb-2"> 
                                <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-full h-full object-cover absolute">
                            </div>
                            <div class="text-sm truncate"> Mastodon </div>
                        </a>
                        <a href="#">  
                            <div class="avatar relative rounded-md overflow-hidden w-full h-24 mb-2"> 
                                <img src="assets/images/avatars/avatar-3.jpg" alt="" class="w-full h-full object-cover absolute">
                            </div>
                            <div class="text-sm truncate"> Fediverse </div>
                        </a>
                        <a href="#">  
                            <div class="avatar relative rounded-md overflow-hidden w-full h-24 mb-2"> 
                                <img src="assets/images/avatars/avatar-4.jpg" alt="" class="w-full h-full object-cover absolute">
                            </div>
                            <div class="text-sm truncate"> Nature </div>
                        </a>
                        <a href="#">  
                            <div class="avatar relative rounded-md overflow-hidden w-full h-24 mb-2"> 
                                <img src="assets/images/avatars/avatar-5.jpg" alt="" class="w-full h-full object-cover absolute">
                            </div>
                            <div class="text-sm truncate"> Animals </div>
                        </a>
                        <a href="#">  
                            <div class="avatar relative rounded-md overflow-hidden w-full h-24 mb-2"> 
                                <img src="assets/images/avatars/avatar-6.jpg" alt="" class="w-full h-full object-cover absolute">
                            </div>
                            <div class="text-sm truncate"> Humour </div>
                        </a>
                    </div>
                  <a href="#" class="button gray mt-3 w-full">  See all </a>
                </div>

                <!-- Groups -->
                <div class="widget card p-5 border-t">
                    <div class="flex items-center justify-between mb-2">
                        <div>
                            <h4 class="text-lg font-semibold"> Groups </h4>
                        </div>
                        <a href="#" class="text-blue-600 "> See all</a>
                    </div>
                    <div>
                  
                      <div class="flex items-center space-x-4 rounded-md -mx-2 p-2 hover:bg-gray-50">
                          <a href="#" class="w-12 h-12 flex-shrink-0 overflow-hidden rounded-full relative">
                              <img src="assets/images/group/group-3.jpg" class="absolute w-full h-full inset-0 " alt="">
                          </a>
                          <div class="flex-1">
                              <a href="timeline-page.html" class="text-base font-semibold capitalize"> Graphic Design  </a>
                              <div class="text-sm text-gray-500 mt-0.5"> 345K  Members</div>
                          </div>
                          <a href="timeline-page.html" class="flex items-center justify-center h-8 px-3 rounded-md text-sm border font-semibold bg-blue-500 text-white">
                              Join
                          </a>
                      </div>
                      <div class="flex items-center space-x-4 rounded-md -mx-2 p-2 hover:bg-gray-50">
                          <a href="#" class="w-12 h-12 flex-shrink-0 overflow-hidden rounded-full relative">
                              <img src="assets/images/group/group-4.jpg" class="absolute w-full h-full inset-0 " alt="">
                          </a>
                          <div class="flex-1">
                              <a href="timeline-page.html" class="text-base font-semibold capitalize"> Mountain Riders </a>
                              <div class="text-sm text-gray-500 mt-0.5"> 452k Members </div>
                          </div>
                          <a href="timeline-page.html" class="flex items-center justify-center h-8 px-3 rounded-md text-sm border font-semibold bg-blue-500 text-white">
                              Join
                          </a>
                      </div>
                      <div class="flex items-center space-x-4 rounded-md -mx-2 p-2 hover:bg-gray-50">
                          <a href="#" class="w-12 h-12 flex-shrink-0 overflow-hidden rounded-full relative">
                              <img src="assets/images/group/group-2.jpg" class="absolute w-full h-full inset-0" alt="">
                          </a>
                          <div class="flex-1">
                              <a href="timeline-page.html" class="text-base font-semibold capitalize">  Coffee Addicts  </a>
                              <div class="text-sm text-gray-500 mt-0.5"> 845K Members</div>
                          </div>
                          <a href="timeline-page.html" class="flex items-center justify-center h-8 px-3 rounded-md text-sm border font-semibold bg-blue-500 text-white">
                              Join
                          </a>
                      </div>
                      <div class="flex items-center space-x-4 rounded-md -mx-2 p-2 hover:bg-gray-50">
                          <a href="#" class="w-12 h-12 flex-shrink-0 overflow-hidden rounded-full relative">
                              <img src="assets/images/group/group-1.jpg" class="absolute w-full h-full inset-0" alt="">
                          </a>
                          <div class="flex-1">
                              <a href="timeline-page.html" class="text-base font-semibold capitalize"> Architecture    </a>
                              <div class="text-sm text-gray-500 mt-0.5"> 237K Members</div>
                          </div>
                          <a href="#" class="flex items-center justify-center h-8 px-3 rounded-md text-sm border font-semibold bg-blue-500 text-white">
                              Join
                          </a>
                      </div>
              
                    </div>
                </div>

            </div>
        </div>
              
        <!-- Followers  -->
        <div class="card md:p-6 p-2 max-w-3xl mx-auto">

            <h2 class="text-xl font-bold"> Followers</h2> 

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
            
            <!--
            <div class="flex justify-center mt-6">
                <a href="#" class="bg-white font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white">
                    Load more ..</a>
            </div>
            -->

        </div>

        <!-- Follows  -->
        <div class="card md:p-6 p-2 max-w-3xl mx-auto">

            <div class="flex justify-between items-start relative md:mb-4 mb-3">
                <div class="flex-1">
                    <h2 class="text-xl font-bold"> Follows </h2>

                </div>
                <a href="#offcanvas-create" uk-toggle class="flex items-center justify-center z-10 h-10 w-10 rounded-full bg-blue-600 text-white absolute right-0"
                data-tippy-placement="left" title="Create New Album">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                </a>
            </div>

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

            <!--
            <div class="flex justify-center mt-6">
                <a href="#" class="bg-white dark:bg-gray-900 font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white">
                    Load more ..</a>
            </div>
            -->

        </div>

        <!-- Pages  -->
        <div class="card md:p-6 p-2 max-w-3xl mx-auto">

            <h2 class="text-xl font-bold"> Pages</h2>

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
            
            <h2 class="text-xl font-semibold"> Latest videos</h2>

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