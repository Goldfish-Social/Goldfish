@if($users->count())
@foreach($users as $user)
<div class="flex items-center space-x-4">
    <div class="w-20 h-20 flex-shrink-0 rounded-md relative mb-3"> 
        <img src="{{ asset('storage/' . $user->avatar) }}" class="absolute w-full h-full inset-0 rounded-md object-cover shadow-sm" alt="">
    </div> 
    <div class="flex-1 border-b pb-3">
        <a href="{{ route('user.view', $user->username) }}"  class="text-lg font-semibold capitalize"> {{ $user->name }}</a>
        <div class="flex space-x-2 items-center text-sm">
            <div> Following: {{ $user->followings()->get()->count() }} </div>
            <div>·</div>
            <div class="tl-follower"> Followers: {{ $user->followers()->get()->count() }} </div>
        </div>
        <div class="flex items-center mt-2">
            <div class="text-sm text-gray-500 ml-2"> {{ $user->username }}</div>
        </div>

    </div>
        @auth
            <button class="flex items-center justify-center h-9 px-3 rounded-md bg-blue-100 text-blue-500 action-follow" data-id="{{ $user->id }}">
                @if(auth()->user()->isFollowing($user))
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-2">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path>
                    </svg> Unfollow
                    @else
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 mr-2">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path>
                    </svg> Follow
                    @endif
            </button>
        @endauth
</div>
@endforeach
@endif