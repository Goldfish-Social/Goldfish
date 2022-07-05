<!-- create post -->
<div class="card lg:mx-0 p-4" uk-toggle="target: #create-post-modal">
    <div class="flex space-x-3">
        <img src="{{ asset('assets/images/avatars/avatar-2.jpg') }}" class="w-10 h-10 rounded-full">
        <input placeholder="How meow are you?" class="bg-gray-100 hover:bg-gray-200 flex-1 h-12 px-6 rounded-full"> 
    </div>
    
    <div class="grid grid-flow-col pt-3 -mx-1 -mb-1 font-semibold text-sm">
        <div class="hover:bg-gray-100 flex items-center p-1.5 rounded-md cursor-pointer"> 
            <svg class="bg-blue-100 h-9 mr-2 p-1.5 rounded-full text-blue-600 w-9 -my-0.5 hidden lg:block" data-tippy-placement="top" title="Tooltip" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
            Upload a video
        </div>
        <div class="hover:bg-gray-100 flex items-center p-1.5 rounded-md cursor-pointer"> 
            <svg class="bg-green-100 h-9 mr-2 p-1.5 rounded-full text-green-600 w-9 -my-0.5 hidden lg:block" uk-tooltip="title: Messages ; pos: bottom ;offset:7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" title="" aria-expanded="false"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path></svg>
            Tag a friend 
        </div>

    </div> 
</div>