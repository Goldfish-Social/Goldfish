@extends('layouts.app')

@section('content')
<div class="container m-auto">

    <h1 class="lg:lg:text-2xl text-lg text-lg font-extrabold leading-none text-gray-900 tracking-tight mt-3"> Explore </h1>

    <div class="lg:m-0 -mx-5 flex justify-between items-center py-2 relative space-x-3 dark-tabs" uk-sticky="cls-active: bg-gray-100 bg-opacity-95; media : @m ; media @m">
        <div class="flex overflow-x-scroll lg:overflow-hidden lg:pl-0 pl-5 space-x-3 lg:py-2">
            <a href="#" class="bg-white py-2 px-4 rounded inline-block font-bold shadow"> Shop</a>
            <a href="#" class="bg-white py-2 px-4 rounded inline-block font-bold shadow"> Travel </a>
            <a href="#" class="bg-white py-2 px-4 rounded inline-block font-bold shadow"> Fitness</a>
            <a href="#" class="bg-white py-2 px-4 rounded inline-block font-bold shadow"> Technology</a>
            <a href="#" class="bg-white py-2 px-4 rounded inline-block font-bold shadow"> Music </a>
            <a href="#" class="bg-white py-2 px-4 rounded inline-block font-bold shadow"> Architecture</a>
        </div>
    </div>
    
    <div class="grid lg:grid-cols-4 grid-cols-2 gap-2 hover:text-yellow-700 uk-link-reset">
        <div>
            <div class="bg-red-400 max-w-full lg:h-64 h-4 rounded-md relative overflow-hidden uk-transition-toggle shadow-sm"> 
                <a href="#story-modal" uk-toggle>
                    <img src="assets/images/avatars/avatar-1.jpg" class="w-full h-full absolute object-cover inset-0">
                </a>
                <a  href="#story-modal" uk-toggle class="absolute flex h-full items-center justify-center w-8 w-full uk-transition-scale-up bg-black bg-opacity-10"> 
                    <img src="assets/images/icon-play.svg" alt="" class="w-16 h-16">
                 </a>
                <div class="absolut absolute bottom-0 flex items-center justify-between px-4 py-3 space-x-2 text-white w-full custom-overly1">   
                    <a href="#">Johnson </a>  
                    <div class="flex space-x-3">  
                      <a href="#" class="flex items-center"> <ion-icon name="heart" class="mr-1 md hydrated" role="img" aria-label="heart"></ion-icon>  150 </a>
                      <a href="#" class="flex items-center"> <ion-icon name="chatbubble-ellipses" class="mr-1 md hydrated" role="img" aria-label="chatbubble ellipses"></ion-icon> 30 </a>         
                    </div>        
                </div>
            </div>
        </div>
        
        <div class="lg:col-span-2 lg:row-span-2">
            <div class="bg-pink-400 h-full max-w-full overflow-hidden relative rounded-md uk-transition-toggle shadow-sm"> 
                <a href="#story-modal" uk-toggle>
                    <img src="assets/images/post/img2.jpg" class="w-full h-full absolute object-cover inset-0 transform scale-125">
                </a>
                <div class="absolut absolute bottom-0 p-6 space-y-2 text-white w-full custom-overly1 uk-light lg:block hidden">   
                    <div class="flex flex-1 items-center space-x-2">
                        <a href="#" class="flex items-center">
                            <div class="bg-gradient-to-tr from-yellow-600 to-pink-600 p-1 rounded-full transform -rotate-2 hover:rotate-3 transition hover:scale-105 m-0.5 mr-2">
                                <img src="assets/images/avatars/avatar-2.jpg" class="bg-gray-200 border border-white rounded-full w-8">
                            </div>
                            Monroe Parker  
                        </a>
                        <div class="flex space-x-3">
                            <a href="#" class="flex items-center">
                                <ion-icon name="heart" class="mr-1 md hydrated" role="img" aria-label="heart"></ion-icon> 150
                            </a>
                            <a href="#" class="flex items-center">
                                <ion-icon name="chatbubble-ellipses" class="mr-1 md hydrated" role="img" aria-label="chatbubble ellipses">
                                </ion-icon> 30
                            </a>
                        </div>
                    </div>
                    <h1 class="font-bold text-3xl"> Lorem ipsum dolor sit amet consectetuer adipiscing</h1>
                    <p> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet 
                        doming id quod mazim placerat facer possim </p>
                </div>
            </div>
        </div>
        <div>
            <div class="bg-green-400 max-w-full lg:h-64 h-40 rounded-md relative overflow-hidden uk-transition-toggle shadow-sm"> 
                <a href="#story-modal" uk-toggle>
                    <img src="assets/images/post/img6.jpg" class="w-full h-full absolute object-cover inset-0">
                </a>
                <a href="#story-modal" uk-toggle class="absolute flex h-full items-center justify-center w-8 w-full uk-transition-scale-up bg-black bg-opacity-10"> 
                    <img src="assets/images/icon-play.svg" alt="" class="w-16 h-16">
                </a>
                <div class="absolut absolute bottom-0 flex items-center justify-between px-4 py-3 space-x-2 text-white w-full custom-overly1">   
                    <a href="#">James  </a>  
                    <div class="flex space-x-3">  
                      <a href="#" class="flex items-center"> <ion-icon name="heart" class="mr-1 md hydrated" role="img" aria-label="heart"></ion-icon>  150 </a>
                      <a href="#" class="flex items-center"> <ion-icon name="chatbubble-ellipses" class="mr-1 md hydrated" role="img" aria-label="chatbubble ellipses"></ion-icon> 30 </a>         
                    </div>        
                </div>
            </div>
        </div>
        <div>
            <div class="bg-yellow-400 max-w-full lg:h-64 h-40 rounded-md relative overflow-hidden shadow-sm"> 
                <a href="#story-modal" uk-toggle>
                    <img src="assets/images/post/img4.jpg" class="w-full h-full absolute object-cover inset-0 object-cover object-left">
                </a>
                <div class="absolut absolute bottom-0 flex items-center justify-between px-4 py-3 space-x-2 text-white w-full custom-overly1">   
                    <a href="#">Martin  </a>  
                    <div class="flex space-x-3">  
                      <a href="#" class="flex items-center"> <ion-icon name="heart" class="mr-1 md hydrated" role="img" aria-label="heart"></ion-icon>  150 </a>
                      <a href="#" class="flex items-center"> <ion-icon name="chatbubble-ellipses" class="mr-1 md hydrated" role="img" aria-label="chatbubble ellipses"></ion-icon> 30 </a>         
                    </div>        
                </div>
            </div>
        </div>
        <div>
            <div class="bg-purple-400 max-w-full lg:h-64 h-40 rounded-md relative overflow-hidden shadow-sm"> 
                <a href="#story-modal" uk-toggle>
                    <img src="assets/images/avatars/avatar-lg-1.jpg" class="w-full h-full absolute object-cover inset-0">
                </a>
                <div class="absolut absolute bottom-0 flex items-center justify-between px-4 py-3 space-x-2 text-white w-full custom-overly1">   
                    <a href="#">Johnson </a>  
                    <div class="flex space-x-3">  
                      <a href="#" class="flex items-center"> <ion-icon name="heart" class="mr-1 md hydrated" role="img" aria-label="heart"></ion-icon>  150 </a>
                      <a href="#" class="flex items-center"> <ion-icon name="chatbubble-ellipses" class="mr-1 md hydrated" role="img" aria-label="chatbubble ellipses"></ion-icon> 30 </a>         
                    </div>        
                </div>
            </div>
        </div>

        <div>
            <div class="bg-blue-400 max-w-full lg:h-64 h-40 rounded-md relative overflow-hidden shadow-sm"> 
                <a href="#story-modal" uk-toggle>
                    <img src="assets/images/post/img1.jpg" class="w-full h-full absolute object-cover inset-0">
                </a>
                <div class="absolut absolute bottom-0 flex items-center justify-between px-4 py-3 space-x-2 text-white w-full custom-overly1">   
                    <a href="#">Jesse  </a>  
                    <div class="flex space-x-3">  
                      <a href="#" class="flex items-center"> <ion-icon name="heart" class="mr-1 md hydrated" role="img" aria-label="heart"></ion-icon>  150 </a>
                      <a href="#" class="flex items-center"> <ion-icon name="chatbubble-ellipses" class="mr-1 md hydrated" role="img" aria-label="chatbubble ellipses"></ion-icon> 30 </a>         
                    </div>        
                </div>
            </div>
        </div>
        <div>
            <div class="bg-green-400 max-w-full lg:h-64 h-40 rounded-md relative overflow-hidden shadow-sm"> 
                <a href="#story-modal" uk-toggle>
                    <img src="assets/images/post/img3.jpg" class="w-full h-full absolute object-cover inset-0">
                </a>
                <div class="absolut absolute bottom-0 flex items-center justify-between px-4 py-3 space-x-2 text-white w-full custom-overly1">   
                    <a href="#">Johnson </a>  
                    <div class="flex space-x-3">  
                      <a href="#" class="flex items-center"> <ion-icon name="heart" class="mr-1 md hydrated" role="img" aria-label="heart"></ion-icon>  150 </a>
                      <a href="#" class="flex items-center"> <ion-icon name="chatbubble-ellipses" class="mr-1 md hydrated" role="img" aria-label="chatbubble ellipses"></ion-icon> 30 </a>         
                    </div>        
                </div>
            </div>
        </div>
        <div>
            <div class="bg-red-400 max-w-full lg:h-64 h-40 rounded-md relative overflow-hidden shadow-sm"> 
                <a href="#story-modal" uk-toggle>
                    <img src="assets/images/post/img8.jpg" class="w-full h-full absolute object-cover inset-0">
                </a>
                <div class="absolut absolute bottom-0 flex items-center justify-between px-4 py-3 space-x-2 text-white w-full custom-overly1">   
                    <a href="#">James  </a>  
                    <div class="flex space-x-3">  
                      <a href="#" class="flex items-center"> <ion-icon name="heart" class="mr-1 md hydrated" role="img" aria-label="heart"></ion-icon>  150 </a>
                      <a href="#" class="flex items-center"> <ion-icon name="chatbubble-ellipses" class="mr-1 md hydrated" role="img" aria-label="chatbubble ellipses"></ion-icon> 30 </a>         
                    </div>        
                </div>
            </div>
        </div>
        <div>
            <div class="bg-yellow-400 max-w-full lg:h-64 h-40 rounded-md relative overflow-hidden shadow-sm"> 
                <a href="#story-modal" uk-toggle>
                    <img src="assets/images/post/img5.jpg" class="w-full h-full absolute object-cover inset-0">
                </a>
                <div class="absolut absolute bottom-0 flex items-center justify-between px-4 py-3 space-x-2 text-white w-full custom-overly1">   
                    <a href="#">Monroe  </a>  
                    <div class="flex space-x-3">  
                      <a href="#" class="flex items-center"> <ion-icon name="heart" class="mr-1 md hydrated" role="img" aria-label="heart"></ion-icon>  150 </a>
                      <a href="#" class="flex items-center"> <ion-icon name="chatbubble-ellipses" class="mr-1 md hydrated" role="img" aria-label="chatbubble ellipses"></ion-icon> 30 </a>         
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