@extends('layouts.app')

@section('content')
    <!--  Feeds  -->
    <div class="lg:flex lg:space-x-10">
        <div class="lg:w-3/4 lg:px-16 space-y-7"> 
            @auth
                @include('posts.create')
            @endauth
            
            @if(count($posts) == 0) 
            <p>No posts found.</p>
            @endif
      
            @foreach($posts as $post)
              <x-post-card :post="$post" />
            @endforeach

            <div class="flex justify-center mt-6">
                {{ $posts->links() }}
            </div>
    
            <!--<div class="flex justify-center mt-6">
                <a href="#" class="bg-white dark:bg-gray-900 font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:text-white">
                    Load more ..</a>
            </div>-->
    
        </div>
        <div class="lg:w-96 w-full">
            
                <div class="bg-white mb-5 px-4 py-3 rounded-md shadow">
                    <h3 class="text-line-through font-semibold mb-1"> Support us </h3>
                    <div class="-mx-2 flex hover:bg-gray-50 px-2 py-2 rounded-md">
                        <img src="{{ asset ('assets/images/icons/gift-icon.png') }}" class="w-9 h-9 mr-3" alt="">
                        <p class="line-clamp-2 leading-6"><a href="https://www.patreon.com/GoldfishSocial" target="_blank"><strong>Become </strong> a <strong> Patreon</strong></a>
                        </p>
                    </div>
                    <div class="-mx-2 flex hover:bg-gray-50 px-2 py-2 rounded-md">
                        <img src="{{ asset ('assets/images/icons/gift-icon.png') }}" class="w-9 h-9 mr-3" alt="">
                        <p class="line-clamp-2 leading-6"><a href="https://paypal.me/stuxOS" target="_blank"><strong>Support </strong> on <strong> PayPal</strong></a>
                        </p>
                    </div>
                </div>
                
                <div class="widget card p-5 border-t">
                    <div class="flex items-center justify-between mb-2">
                        <div>
                            <h4 class="text-lg font-semibold"> Discover </h4>
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

    
                <div uk-sticky="media @m ; offset:80 ; bottom : true" class="widget card mt-5">
            
            
                    <div class="border-b flex items-center justify-between p-4">
                        <div>
                            <h2 class="text-lg font-semibold">Explore</h2>
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
                        
                
                    </div>
                
                    <a href="{{ route('users') }}" class="block text-center pb-4 font-medium text-blue-500"> See all </a>
                
                </div>
    
        </div>
    </div>
    
@endsection