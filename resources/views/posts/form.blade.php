<!-- Craete post modal -->

<div id="create-post-modal" class="create-post" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical rounded-lg p-0 lg:w-5/12 relative shadow-2xl uk-animation-slide-bottom-small">
        <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
        @csrf

        <div class="text-center py-4 border-b">
            <h3 class="text-lg font-semibold"> Create Post </h3>
            <button class="uk-modal-close-default bg-gray-100 rounded-full p-2.5 m-1 right-2" type="button" uk-close uk-tooltip="title: Close ; pos: bottom ;offset:7"></button>
        </div>

        <div class="flex flex-1 items-start space-x-4 p-5">
            <img src="{{asset('storage/' . Auth()->user()->avatar)}}"
                class="bg-gray-200 border border-white rounded-full w-11 h-11">

        
            <div class="flex-1 pt-2">
                <textarea name="caption" class="uk-textare text-black shadow-none focus:shadow-none text-xl font-medium resize-none @error('password') is-invalid @enderror" rows="4"
                    placeholder="How meow are you?"></textarea>
                    
                    @error('caption')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
            </div>

        </div>
        <div class="bsolute bottom-0 p-4 space-x-4 w-full">
            <div class="flex bg-gray-50 border border-purple-100 rounded-2xl p-3 shadow-sm items-center">
                <div class="flex justify-center items-center w-full">
                    <label for="dropzone-file" class="flex flex-col justify-center items-center w-full h-40 bg-gray-50 rounded-lg border-2 border-gray-300 border-dashed cursor-pointer dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col justify-center items-center pt-5 pb-6">
                            <svg class="mb-3 w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">MP4, MOV, AVI or GIF (MAX. 40M)</p>
                        </div>
                        <input id="dropzone-file" name="media" type="file" class="hidden" />
                    </label>
                    @error('media')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div> 
            </div>
            
        </div>
        <div class="flex items-center w-full justify-between p-3 border-t">
            <select class="selectpicker mt-2 col-4 story" name="visibility">
                <option value="public" data-icon="uil-globe" selected>Public</option>
                <option value="unlisted" data-icon="uil-layer-group-slash">Unlisted</option>
                <option value="local" data-icon="uil-bullseye">Local</option>
                <option value="followers" data-icon="uil-chat-bubble-user">Followers</option>
            </select>

            <div class="flex space-x-2">
                <div class="checkbox mt-2">
                    <input type="checkbox" id="chekcbox1" name="nsfw">
                    <label for="chekcbox1"><span class="checkbox-icon"></span> NSFW</label>
                </div>

               <button type="submit" class="bg-blue-600 flex h-9 items-center justify-center rounded-md text-white px-5 font-medium">
                  Publish </button>    
            </div>
        </div>

        </form>
    
    </div>
</div>