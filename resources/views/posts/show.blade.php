@extends('layouts.app')

@section('content')
<div class="container m-auto">

    <h1 class="lg:text-2xl text-lg font-extrabold leading-none text-gray-900 tracking-tight mb-5"> Feed </h1>

    <div class="lg:flex justify-center lg:space-x-10 lg:space-y-0 space-y-5">

        <!-- left sidebar-->
        <div class="space-y-5 flex-shrink-0 lg:w-7/12">

            <!-- post 4-->
    <div class="bg-white shadow rounded-md dark:bg-gray-900 -mx-2 lg:mx-0" id="toggle">
        <!-- post header-->
        <div class="flex justify-between items-center px-4 py-3">
            <div class="flex flex-1 items-center space-x-4">
                <a href="/i/users/{{$post->User->id}}">
                    <div class="bg-gradient-to-tr from-yellow-600 to-pink-600 p-0.5 rounded-full">  
                        <img src="{{ asset('assets/images/avatars/avatar-2.jpg') }}" class="bg-gray-200 border border-white rounded-full w-8 h-8">
                    </div>
                </a>
                <span class="block capitalize font-semibold dark:text-gray-100">{{$post->User->username}}</span>
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
            <video width="auto" height="auto" controls class="w-full">
                    <source src="{{asset('storage/' . $post->media) }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        
        <div class="p-3 border-b dark:border-gray-700">
            {{$post->caption}}
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
                
                <div class="dark:text-gray-100">
                    <strong>{{$post->likes_count}}</strong> Likes  <strong>{{$post->reblogs_count}}</strong> Shares
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

        </div>

       @include('components.post-sidebar')

    </div>               

</div>
@endsection