@extends('layouts.app')

@section('content')
<div class="lg:flex lg:space-x-10">
                      
    <div class="lg:w-3/4"> 
       
        <div class="video rounded">
            <video frameborder="0" controls loop playsinline uk-video="autoplay: inview" width="100%" allowfullscreen uk-responsive class="uk-height-max-medium">
                <source src="{{asset('storage/' . $post->media) }}" type="video/mp4">
            Your browser does not support the video tag.
            </video>
        </div>

        <div class="py-5 space-y-4">

            <div>
                <h1 class="text-2xl font-semibold line-clamp-1"> {{$post->caption}} </h1>
                <p> 60,723,169 views </p>
            </div>
            
            <div class="md:flex items-center justify-between">
                <a href="/i/users/{{$post->User->id}}" class="flex items-center space-x-3">
                    <img src="{{ asset('assets/images/avatars/avatar-2.jpg') }}" alt="" class="w-10 rounded-full">
                    <div class="">
                        <div class="text-base font-semibold">{{$post->User->username}}</div>
                        <div class="text-xs"> Published on {{$post->created_at}} </div>
                    </div>
                </a>
                <div class="flex items-center space-x-3 md:pt-0 pt-2">
                    <div class="like-btn" uk-tooltip="Likes">
                        <span class="likes">{{$post->likes_count}}</span>
                        <i class="uil-thumbs-down"></i>
                    </div>
                    
                    <div class="like-btn" uk-tooltip="Shares">
                        <span class="likes">{{$post->reblogs_count}}</span>
                        <i class="uil-thumbs-up"></i>
                    </div>
                </div>
            </div>
            
            <div class="text-lg font-semibold pt-2"> Description </div>
            <p>
                {{$post->caption}}
            </p>
            <hr>
            <div class="text-lg font-semibold pt-2"> Comments ( 5210 )</div>


            <div class="my-5">

                <div class="flex gap-x-4 mb-5 relative">
                    <img src="assets/images/avatars/avatar-4.jpg" alt="" class="rounded-full shadow w-12 h-12">
                    <div>
                        <h4 class="text-base m-0 font-semibold"> Stella Johnson</h4>
                        <span class="text-gray-700 text-sm"> 10th June 2021 </span>
                        <p class="mt-3">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam ut laoreet dolore
                            magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                            ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                        </p>
        
                        
        
                    </div>
                </div>

                <div class="flex gap-x-4 mb-5 relative">
                    <img src="assets/images/avatars/avatar-5.jpg" alt="" class="rounded-full shadow w-12 h-12">
                    <div>
                        <h4 class="text-base m-0 font-semibold">  Adrian Mohani  </h4>
                        <span class="text-gray-700 text-sm"> 10th April 2021 </span>
                        <p class="mt-3">
                             elit, sed diam ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim ipsum dolor sit amet, consectetuer adipiscing elit, sed diam ut laoreet dolore
                           </p>
        
                        
        
                    </div>
                </div>
                

            </div>

        </div>


    </div>

    <!-- sidebar -->
    <div class="lg:w-1/4 w-full"> 

       <h3 class="text-xl font-bold mb-2"> Related Videos </h3>
       
       <div class="py-2 relative">
           <a href="video-watch.html" class="w-full h-32 overflow-hidden rounded-lg relative shadow-sm flex-shrink-0 block"> 
                <img src="assets/images/video/img-3.png" alt="" class="w-full h-full absolute inset-0 object-cover">
                <img src="assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                <span class="absolute bg-black bg-opacity-60 bottom-1 font-semibold px-1.5 py-0.5 right-1 rounded text-white text-xs"> 12:21</span>
           </a>
           <div class="flex-1 pt-3 relative"> 
               <a href="video-watch.html" class="line-clamp-2 font-semibold">     Exploring an Abandoned Water Park in China   </a>
               <div class="flex space-x-2 items-center text-sm pt-1">
                   <div> 27 weeks ago</div>
                   <div>·</div>
                   <div> 156.9K views</div>
               </div>
           </div>
        </div> 
       <div class="py-2 relative">
          <a href="video-watch.html" class="w-full h-32 overflow-hidden rounded-lg relative shadow-sm flex-shrink-0 block"> 
               <img src="assets/images/video/img-5.png" alt="" class="w-full h-full absolute inset-0 object-cover">
               <span class="absolute bg-black bg-opacity-60 bottom-1 font-semibold px-1.5 py-0.5 right-1 rounded text-white text-xs"> 12:21</span>
               <img src="assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
           </a>
          <div class="flex-1 pt-3 relative"> 
              <a href="video-watch.html" class="line-clamp-2 font-semibold">     Amazing Little Girl Has Very Talent Voice Vocal Coach    </a>
              <div class="flex space-x-2 items-center text-sm pt-1">
                  <div> 27 weeks ago</div>
                  <div>·</div>
                  <div> 156.9K views</div>
              </div>
          </div> 
       </div>
       <div class="py-2 relative">
           <a href="video-watch.html" class="w-full h-32 overflow-hidden rounded-lg relative shadow-sm flex-shrink-0 block"> 
                <img src="assets/images/video/img-3.png" alt="" class="w-full h-full absolute inset-0 object-cover">
                <span class="absolute bg-black bg-opacity-60 bottom-1 font-semibold px-1.5 py-0.5 right-1 rounded text-white text-xs"> 12:21</span>
                <img src="assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
           </a>
           <div class="flex-1 pt-3 relative"> 
               <a href="video-watch.html" class="line-clamp-2 font-semibold"> Great Jet Model Show With SUKHOI SU-30  </a>
               <div class="flex space-x-2 items-center text-sm pt-1">
                   <div> 27 weeks ago</div>
                   <div>·</div>
                   <div> 156.9K views</div>
               </div>
           </div>
       </div>

    </div>

</div>
@endsection
