@extends('layouts.app')

@section('content')            
    <!--  Feeds  -->
    <div class="lg:flex lg:space-x-10">
        <div class="lg:w-3/4 lg:px-20 space-y-7">
            
            @include('posts.create')
            
            @if(count($posts) == 0) 
            <p>No posts found.</p>
            @endif
      
            @foreach($posts as $post)
              <x-post-card :post="$post" />
            @endforeach 
    
            <div class="flex justify-center mt-6">
                <a href="#" class="bg-white dark:bg-gray-900 font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:text-white">
                    Load more ..</a>
            </div>
    
        </div>
        <div class="lg:w-72 w-full">
            
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

            <h3 class="text-xl font-semibold"> Explore </h3>
    
            <div class="" uk-sticky="offset:80">
    
                <div class="contact-list">
    
                    <a href="#">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-1.jpg" alt="">
                            <span class="user_status status_online"></span>
                        </div>
                        <div class="contact-username"> Goldfish</div>
                    </a>
                    <div uk-drop="pos: left-center ;animation: uk-animation-slide-left-small">
                        <div class="contact-list-box">
                            <div class="contact-avatar">
                                <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                <span class="user_status status_online"></span>
                            </div>
                            <div class="contact-username">  Goldfish</div>
                            <p> 
                                <ion-icon name="people" class="text-lg mr-1"></ion-icon> Become friends with 
                                <strong> Goldfish </strong> and <strong> 14 Others</strong>
                            </p>
                            <div class="contact-list-box-btns">
                                <button type="button" class="button primary flex-1 block mr-2">
                                    <i class="uil-envelope mr-1"></i> Send message</button>
                                <button type="button"  href="#" class="button secondary button-icon mr-2">
                                    <i class="uil-list-ul"> </i> </button>
                                <button type="button" a href="#" class="button secondary button-icon"> 
                                    <i class="uil-ellipsis-h"> </i> 
                                </button>
                            </div>
                        </div>
                    </div>
    
                    <a href="#">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-2.jpg" alt="">
                            <span class="user_status"></span>
                        </div>
                        <div class="contact-username"> Goldfish</div>
                    </a>
                    <div uk-drop="pos: left-center ;animation: uk-animation-slide-left-small">
                        <div class="contact-list-box">
                            <div class="contact-avatar">
                                <img src="assets/images/avatars/avatar-1.jpg" alt="">
                                <span class="user_status"></span>
                            </div>
                            <div class="contact-username">  Goldfish </div>
                            <p> 
                                <ion-icon name="people" class="text-lg mr-1"></ion-icon> Become friends with 
                                <strong> Goldfish </strong> and <strong> 14 Others</strong>
                            </p>
                            <div class="contact-list-box-btns">
                                <button type="button" class="button primary flex-1 block mr-2">
                                    <i class="uil-envelope mr-1"></i> Send message</button>
                                <button type="button"  href="#" class="button secondary button-icon mr-2">
                                    <i class="uil-list-ul"> </i> </button>
                                <button type="button" a href="#" class="button secondary button-icon"> 
                                    <i class="uil-ellipsis-h"> </i> 
                                </button>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-5.jpg" alt="">
                            <span class="user_status status_online"></span>
                        </div>
                        <div class="contact-username">Goldfish</div>
                    </a>
                    <a href="#">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-6.jpg" alt="">
                        </div>
                        <div class="contact-username"> Goldfish</div>
                    </a>
                    
                    <a href="#">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-1.jpg" alt="">
                            <span class="user_status status_online"></span>
                        </div>
                        <div class="contact-username"> Goldfish</div>
                    </a>
                    <a href="#">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-2.jpg" alt="">
                            <span class="user_status"></span>
                        </div>
                        <div class="contact-username"> Goldfish</div>
                    </a>
                    <a href="#">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-7.jpg" alt="">
                        </div>
                        <div class="contact-username">Goldfish</div>
                    </a>
                    <a href="#">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-4.jpg" alt="">
                        </div>
                        <div class="contact-username"> Goldfish</div>
                    </a>
    
    
                </div>
    
    
            </div>
    
        </div>
    </div>
    
@endsection