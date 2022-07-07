<!-- sidebar -->
<div class="sidebar">
        
    <div class="sidebar_inner" data-simplebar>

        <ul>
            <li class="{{ (request()->is('i/home')) ? 'active' : '' }}"><a href="{{ route('home') }}"> 
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-blue-600"> 
                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                </svg>
                <span> Home </span> </a> 
            </li>
            @auth
            <li class="{{ (request()->is('@*')) ? 'active' : '' }}">  <a href="/{{'@' .auth()->user()->username}}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-green-500">
                    <path d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z" />
                </svg>  <span>  Profile </span></a> 
            </li>
            @endauth
            <li class="{{ (request()->is('i/trending*')) ? 'active' : '' }}"><a href="{{ route('trending') }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-blue-500">
                    <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z" />
                    <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z" />
                </svg>
               <span> Local</span> </a> 
            </li>
            <li class="{{ (request()->is('i/discover*')) ? 'active' : '' }}"><a href="{{ route('discover') }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-red-500">
                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm3 2h6v4H7V5zm8 8v2h1v-2h-1zm-2-2H7v4h6v-4zm2 0h1V9h-1v2zm1-4V5h-1v2h1zM5 5v2H4V5h1zm0 4H4v2h1V9zm-1 4h1v2H4v-2z" clip-rule="evenodd" />
                </svg>
                <span> Discover</span></a> 
            </li> 
            <li class="{{ (request()->is('i/groups*')) ? 'active' : '' }}"><a href="{{ route('groups') }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-blue-500">
                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                </svg><span> Groups </span></a> 
            </li>
            <li class="{{ (request()->is('i/pages*')) ? 'active' : '' }}">  <a href="{{ route('pages') }}"> 
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-yellow-500">
                  <path fill-rule="evenodd" d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z" clip-rule="evenodd"></path>
                </svg> 
                <span> Pages </span> </a> 
            </li>
            <li class="{{ (request()->is('i/users*')) ? 'active' : '' }}"><a href="/i/users"> 
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-pink-500">
                    <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" />
                    <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
                </svg> <span> Users</span> </a> 
            </li> 
            <li><a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-indigo-500">
                    <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                </svg>
                <span> Course</span></a> 
            </li>

            <li id="more-veiw" hidden><a href="#"> 
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-yellow-500">
                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                  </svg><span>  Events </span></a> 
            </li>

            <li id="more-veiw" hidden><a href="#"> 
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-purple-500">
                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                </svg>  <span>  Photos </span></a> 
            </li>
            <li id="more-veiw" hidden><a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-pink-500">
                    <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd" />
                    <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z" />
                </svg>
                <span> Blog</span></a> 
            </li> 
 
        </ul>

        <a href="#" class="see-mover h-10 flex my-1 pl-2 rounded-xl text-gray-600" uk-toggle="target: #more-veiw; animation: uk-animation-fade"> 
            <span class="w-full flex items-center" id="more-veiw">
                <svg class="  bg-gray-100 mr-2 p-0.5 rounded-full text-lg w-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                See More  
            </span>
            <span class="w-full flex items-center" id="more-veiw" hidden>
                <svg  class="bg-gray-100 mr-2 p-0.5 rounded-full text-lg w-7"  fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg> 
                See Less 
            </span>
        </a>  
        
        <h3 class="side-title"> See also </h3>

        <div class="contact-list my-2 ml-1">
            
            <a href="#">
                <div class="contact-avatar">
                    <img src="assets/images/avatars/avatar-1.jpg" alt="">
                    <span class="user_status status_online"></span>
                </div>
                <div class="contact-username"> @stux</div>
            </a>
            <a href="#">
                <div class="contact-avatar">
                    <img src="assets/images/avatars/avatar-2.jpg" alt="">
                    <span class="user_status"></span>
                </div>
                <div class="contact-username"> @stux</div>
            </a>
            <a href="#">
                <div class="contact-avatar">
                    <img src="assets/images/avatars/avatar-7.jpg" alt="">
                </div>
                <div class="contact-username"> @stux</div>
            </a>
            <a href="#">
                <div class="contact-avatar">
                    <img src="assets/images/avatars/avatar-4.jpg" alt="">
                </div>
                <div class="contact-username"> @stux</div>
            </a>

        </div>

        <ul class="side_links" data-sub-title="Quick access">
            @auth
            <li><a href="{{ route('settings') }}"> <ion-icon name="settings-outline" class="side-icon"></ion-icon>  <span> Settings  </span> </a> 
                <ul>
                    <li><a href="{{ route('profile') }}">Profile</a></li>
                    <li><a href="{{ route('avatar') }}">Avatar & Cover</a></li>
                    <li><a href="{{ route('password') }}">Password</a></li>
                    <li><a href="{{ route('security') }}">Security</a></li>
                    <li><a href="{{ route('sessions') }}">Sessions</a></li>
                </ul>
            </li>
            @endauth
            <li><a href="#"> <ion-icon name="albums-outline" class="side-icon"></ion-icon> <span> Information  </span> </a>
                <ul> 
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('guidelines') }}">Guidelines</a></li>
                    <li><a href="{{ route('terms') }}">Terms</a></li>
                    <li><a href="{{ route('privacy') }}">Privacy</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </li>
            @auth
            <li><a href="#"> <ion-icon name="document-outline" class="side-icon"></ion-icon> <span> Create Content </span>  </a> 
                <ul>
                    <li><a href="{{ route('create-group') }}"> Create Group </a></li>
                    <li><a href="{{ route('create-page') }}"> Create Page </a></li> 
                </ul>
            </li>
            <li><a href="#"> <ion-icon name="code-slash-outline" class="side-icon"></ion-icon> <span> Developer  </span> </a>
                <ul> 
                    <li><a href="#"> Developer </a></li>
                    <li><a href="#"> Docs </a></li>
                    <li><a href="#"> API </a></li>
                </ul>
            </li>
            @endauth
        </ul>

        <div class="footer-links">
            <a href="/about"> About </a>
            <a href="/about/contact"> Contact </a>
            <a href="/about/terms"> Terms </a>
            <a href="/about/privacy"> Privacy </a>
        </div>

    </div>

    <!-- sidebar overly for mobile -->
    <div class="side_overly" uk-toggle="target: #wrapper ; cls: is-collapse is-active"></div>

</div>