<!-- open chat box -->
    <div uk-toggle="target: #offcanvas-chat" class="start-chat">
        <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
        </svg>
    </div>
    
    <div id="offcanvas-chat" uk-offcanvas="flip: true; overlay: true">
        <div class="uk-offcanvas-bar bg-white p-0 w-full lg:w-80 shadow-2xl">


            <div class="relative pt-5 px-4">

                <h3 class="text-2xl font-bold mb-2"> Chats </h3>

                <div class="absolute right-3 top-4 flex items-center space-x-2">

                    <button class="uk-offcanvas-close  px-2 -mt-1 relative rounded-full inset-0 lg:hidden blcok"
                        type="button" uk-close></button>

                    <a href="#" uk-toggle="target: #search;animation: uk-animation-slide-top-small">
                        <ion-icon name="search" class="text-xl hover:bg-gray-100 p-1 rounded-full"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="settings-outline" class="text-xl hover:bg-gray-100 p-1 rounded-full"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="ellipsis-vertical" class="text-xl hover:bg-gray-100 p-1 rounded-full"></ion-icon>
                    </a>
                    <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700"  
                    uk-drop="mode: click;pos: bottom-right;animation: uk-animation-slide-bottom-small; offset:5">
                        <ul class="space-y-1">
                          <li> 
                              <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                 <ion-icon name="checkbox-outline" class="pr-2 text-xl"></ion-icon> Mark all as read
                              </a> 
                          </li>
                          <li> 
                              <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                <ion-icon name="settings-outline" class="pr-2 text-xl"></ion-icon>  Chat setting 
                              </a> 
                          </li>
                          <li> 
                              <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                <ion-icon name="notifications-off-outline" class="pr-2 text-lg"></ion-icon>   Disable notifications
                              </a> 
                          </li> 
                          <li> 
                              <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                <ion-icon name="star-outline"  class="pr-2 text-xl"></ion-icon>  Create a group chat 
                              </a> 
                          </li>
                        </ul>
                    </div>
                              

                </div>


            </div>

            <div class="absolute bg-white z-10 w-full -mt-5 lg:-mt-2 transform translate-y-1.5 py-2 border-b items-center flex"
                id="search" hidden>
                <input type="text" placeholder="Search.." class="flex-1">
                <ion-icon name="close-outline" class="text-2xl hover:bg-gray-100 p-1 rounded-full mr-4 cursor-pointer"
                    uk-toggle="target: #search;animation: uk-animation-slide-top-small"></ion-icon> 
            </div>

            <nav class="responsive-nav border-b extanded mb-2 -mt-2">
                <ul uk-switcher="connect: #chats-tab; animation: uk-animation-fade">
                    <li class="uk-active"><a class="active" href="#0"> Friends </a></li>
                    <li><a href="#0">Groups <span> 10 </span> </a></li>
                </ul>
            </nav>

            <div class="contact-list px-2 uk-switcher" id="chats-tab">

                <div class="p-1">
                    <a href="chats-friend.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-7.jpg" alt="">
                        </div>
                        <div class="contact-username"> Alex Dolgove</div>
                    </a>
                    <a href="chats-friend.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-8.jpg" alt="">
                            <span class="user_status status_online"></span>
                        </div>
                        <div class="contact-username"> Dennis Han</div>
                    </a>
                    <a href="chats-friend.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-2.jpg" alt="">
                            <span class="user_status"></span>
                        </div>
                        <div class="contact-username"> Erica Jones</div>
                    </a>
                    <a href="chats-friend.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-3.jpg" alt="">
                        </div>
                        <div class="contact-username">Stella Johnson</div>
                    </a>
                    
                    <a href="chats-friend.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-5.jpg" alt="">
                        </div>
                        <div class="contact-username">Adrian Mohani </div>
                    </a>
                    <a href="chats-friend.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-6.jpg" alt="">
                        </div>
                        <div class="contact-username"> Jonathan Madano</div>
                    </a>
                    <a href="chats-friend.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-2.jpg" alt="">
                            <span class="user_status"></span>
                        </div>
                        <div class="contact-username"> Erica Jones</div>
                    </a>
                    <a href="chats-friend.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-1.jpg" alt="">
                            <span class="user_status status_online"></span>
                        </div>
                        <div class="contact-username"> Dennis Han</div>
                    </a>
                   

                </div>
               <div class="p-1">
                    <a href="chats-group.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-7.jpg" alt="">
                        </div>
                        <div class="contact-username"> Alex Dolgove</div>
                    </a>
                    <a href="chats-group.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-8.jpg" alt="">
                            <span class="user_status status_online"></span>
                        </div>
                        <div class="contact-username"> Dennis Han</div>
                    </a>
                    <a href="chats-group.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-2.jpg" alt="">
                            <span class="user_status"></span>
                        </div>
                        <div class="contact-username"> Erica Jones</div>
                    </a>
                    <a href="chats-group.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-3.jpg" alt="">
                        </div>
                        <div class="contact-username">Stella Johnson</div>
                    </a>
                    
                    <a href="chats-group.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-5.jpg" alt="">
                        </div>
                        <div class="contact-username">Adrian Mohani </div>
                    </a>
                    <a href="chats-group.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-6.jpg" alt="">
                        </div>
                        <div class="contact-username"> Jonathan Madano</div>
                    </a>
                    <a href="chats-group.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-2.jpg" alt="">
                            <span class="user_status"></span>
                        </div>
                        <div class="contact-username"> Erica Jones</div>
                    </a>
                    <a href="chats-group.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-1.jpg" alt="">
                            <span class="user_status status_online"></span>
                        </div>
                        <div class="contact-username"> Dennis Han</div>
                    </a>
                   

                </div>

            </div>
        </div>
    </div>

    
    
    <!-- Create new album -->

    <div id="offcanvas-create" uk-offcanvas="flip: true; overlay: true">
        <div class="uk-offcanvas-bar lg:w-4/12 w-full dark:bg-gray-700 dark:text-gray-300 p-0 bg-white flex flex-col justify-center">
    
            <button class="uk-offcanvas-close absolute" type="button" uk-close></button>

            <!-- notivication header -->
            <div class="-mb-1 border-b font-semibold px-5 py-5 text-lg">
                <h4> Create album </h4>
            </div>

            <div class="p-6 space-y-3 flex-1">
                <div>
                    <label> Album Name  </label>
                    <input type="text" class="with-border" placeholder="">
                </div>
                <div>
                    <label> Visibilty   </label>
                    <select id="" name=""  class="shadow-none selectpicker with-border">
                        <option data-icon="uil-bullseye"> Private </option>
                        <option data-icon="uil-chat-bubble-user">My Following</option>
                        <option data-icon="uil-layer-group-slash">Unlisted</option>
                        <option data-icon="uil-globe" selected>Puplic</option>
                    </select>
                </div>
                <div uk-form-custom class="w-full py-3">
                        <div class="bg-gray-100 border-2 border-dashed flex flex-col h-32 items-center justify-center relative w-full rounded-lg dark:bg-gray-800 dark:border-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-12">
                                <path d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z" />
                                <path d="M9 13h2v5a1 1 0 11-2 0v-5z" />
                            </svg>
                        </div>
                    <input type="file">
                </div>
               
            </div>
            <div class="p-5">
                <button type="button"  class="button w-full">
                    Create Now
                </button>
            </div>

            
        </div>
    </div>

        <!-- story-preview -->
        <div class="story-prev">
    
            <div class="story-sidebar uk-animation-slide-left-medium">
                <div class="md:flex justify-between items-center py-2 hidden">
                    <h3 class="text-2xl font-semibold"> All Story </h3>
                    <a href="#" class="text-blue-600"> Setting</a>
                </div>
        
                <div class="story-sidebar-scrollbar" data-simplebar>
                    <h3 class="text-lg font-medium"> Your Story </h3>
        
                    <a class="flex space-x-4 items-center hover:bg-gray-100 md:my-2 py-2 rounded-lg hover:text-gray-700" href="#">
                        <svg class="w-12 h-12 p-3 bg-gray-200 rounded-full text-blue-500 ml-1" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        <div class="flex-1">
                            <div class="text-lg font-semibold"> Create a story </div>
                            <div class="text-sm -mt-0.5"> Share a photo or write something. </div>
                        </div>
                    </a>
         
                    <h3 class="text-lg font-medium lg:mt-3 mt-1"> Friends Story </h3>
        
                    <div class="story-users-list"  uk-switcher="connect: #story_slider ; toggle: > * ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium ">
        
                        <a href="#">
                            <div class="story-media">
                                <img src="assets/images/avatars/avatar-1.jpg" alt="">
                            </div>
                            <div class="story-text">
                                <div class="story-username"> Dennis Han</div>
                                <p> <span class="story-count"> 2 new </span> <span class="story-time"> 4Mn ago</span> </p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="story-media">
                                <img src="assets/images/avatars/avatar-2.jpg" alt="">
                            </div>
                            <div class="story-text">
                                <div class="story-username"> Adrian Mohani</div>
                                <p> <span class="story-count"> 1 new </span> <span class="story-time"> 1hr ago</span> </p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="story-media">
                                <img src="assets/images/avatars/avatar-3.jpg" alt="">
                            </div>
                            <div class="story-text">
                                <div class="story-username">Alex Dolgove </div>
                                <p> <span class="story-count"> 3 new </span> <span class="story-time"> 2hr ago</span> </p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="story-media">
                                <img src="assets/images/avatars/avatar-4.jpg" alt="">
                            </div>
                            <div class="story-text">
                                <div class="story-username"> Stella Johnson </div>
                                <p> <span class="story-count"> 2 new </span> <span class="story-time"> 3hr ago</span> </p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="story-media">
                                <img src="assets/images/avatars/avatar-5.jpg" alt="">
                            </div>
                            <div class="story-text">
                                <div class="story-username"> Adrian Mohani </div>
                                <p> <span class="story-count"> 1 new </span> <span class="story-time"> 4hr ago</span> </p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="story-media">
                                <img src="assets/images/avatars/avatar-8.jpg" alt="">
                            </div>
                            <div class="story-text">
                                <div class="story-username"> Dennis Han</div>
                                <p> <span class="story-count"> 2 new </span> <span class="story-time"> 8Hr ago</span> </p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="story-media">
                                <img src="assets/images/avatars/avatar-6.jpg" alt="">
                            </div>
                            <div class="story-text">
                                <div class="story-username"> Adrian Mohani</div>
                                <p> <span class="story-count"> 1 new </span> <span class="story-time"> 12hr ago</span> </p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="story-media">
                                <img src="assets/images/avatars/avatar-7.jpg" alt="">
                            </div>
                            <div class="story-text">
                                <div class="story-username">Alex Dolgove </div>
                                <p> <span class="story-count"> 3 new </span> <span class="story-time"> 22hr ago</span> </p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="story-media">
                                <img src="assets/images/avatars/avatar-8.jpg" alt="">
                            </div>
                            <div class="story-text">
                                <div class="story-username"> Stella Johnson </div>
                                <p> <span class="story-count"> 2 new </span> <span class="story-time"> 3Dy ago</span> </p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="story-media">
                                <img src="assets/images/avatars/avatar-5.jpg" alt="">
                            </div>
                            <div class="story-text">
                                <div class="story-username"> Adrian Mohani </div>
                                <p> <span class="story-count"> 1 new </span> <span class="story-time"> 4Dy ago</span> </p>
                            </div>
                        </a>
                        
        
                    </div>
        
        
                </div>
        
            </div>
            <div class="story-content">
        
                <ul class="uk-switcher uk-animation-scale-up" id="story_slider" >
                    <li class="relative">
    
                        <span uk-switcher-item="previous" class="slider-icon is-left"> </span>
                        <span uk-switcher-item="next" class="slider-icon is-right"> </span>
    
                        <div uk-lightbox>
                            <a href="assets/images/avatars/avatar-lg-2.jpg" data-alt="Image">
                                <img src="assets/images/avatars/avatar-lg-2.jpg" class="story-slider-image"  data-alt="Image">
                            </a>
                        </div>
    
                    </li>
                    <li class="relative">
    
                        <span uk-switcher-item="previous" class="slider-icon is-left"> </span>
                        <span uk-switcher-item="next" class="slider-icon is-right"> </span>
    
                        <div uk-lightbox>
                            <a href="assets/images/avatars/avatar-lg-1.jpg" data-alt="Image">
                                <img src="assets/images/avatars/avatar-lg-1.jpg" class="story-slider-image"  data-alt="Image">
                            </a>
                        </div>
    
                    </li>
                    <li class="relative">
    
                        <span uk-switcher-item="previous" class="slider-icon is-left"> </span>
                        <span uk-switcher-item="next" class="slider-icon is-right"> </span>
    
                        <div uk-lightbox>
                            <a href="assets/images/avatars/avatar-lg-4.jpg" data-alt="Image">
                                <img src="assets/images/avatars/avatar-lg-4.jpg" class="story-slider-image"  data-alt="Image">
                            </a>
                        </div>
    
                    </li>
    
                    <li class="relative">
                        <div class="bg-gray-200 story-slider-placeholder shadow-none animate-pulse"> </div>
                    </li>
                    <li class="relative">
                        <div class="bg-gray-200 story-slider-placeholder shadow-none animate-pulse"> </div>
                    </li>
                    <li class="relative">
                        <div class="bg-gray-200 story-slider-placeholder shadow-none animate-pulse"> </div>
                    </li>
                    <li class="relative">
                        <div class="bg-gray-200 story-slider-placeholder shadow-none animate-pulse"> </div>
                    </li>
                    <li class="relative">
                        <div class="bg-gray-200 story-slider-placeholder shadow-none animate-pulse"> </div>
                    </li>
                    <li class="relative">
                        <div class="bg-gray-200 story-slider-placeholder shadow-none animate-pulse"> </div>
                    </li>
                    <li class="relative">
                        <div class="bg-gray-200 story-slider-placeholder shadow-none animate-pulse"> </div>
                    </li>
                    <li class="relative">
                        <div class="bg-gray-200 story-slider-placeholder shadow-none animate-pulse"> </div>
                    </li>
                </ul>
        
            </div>
        
            <!-- story colose button-->
            <span class="story-btn-close" uk-toggle="target: body ; cls: story-active"
                uk-tooltip="title:Close story ; pos: left">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </span>
        
        </div> 