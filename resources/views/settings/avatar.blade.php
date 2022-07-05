@extends('layouts.app')

@section('content')
<div class="mb-6">
    <h2 class="text-2xl font-semibold">Profile avatar</h2>
</div>

<div class="bg-white lg:divide-x lg:flex lg:shadow-md rounded-md shadow lg:rounded-xl overflow-hidden lg:m-0 -mx-4">
    <div class="lg:w-1/3">

        <nav class="responsive-nav setting-nav setting-menu"
            uk-sticky="top:30 ; offset:80 ; media:@m ;bottom:true; animation: uk-animation-slide-top">
            <h4 class="mb-0 p-3 uk-visible@m hidden"> Setting Navigation </h4>
            @include('settings.settings-nav')
        </nav>

    </div>

    <div class="lg:w-2/3">

        <div class="lg:flex lg:flex-col justify-between lg:h-full">

            <!-- form header -->
            <div class="lg:px-10 lg:py-8 p-6">
                <h3 class="font-bold mb-2 text-xl">Set avatar & cover</h3>
                <p class="">This will be available to the public.</p>
                
            </div>
            
            <!-- form body -->
            <div class="lg:py-8 lg:px-20 flex-1 space-y-4 p-6">
                @if (session('status'))
                <p class="text-green-500">
                    {{ session('status') }}
                </p>
                @elseif (session('error'))
                <p class="text-red-500">
                        {{ session('error') }}
                </p>
                @endif

                <form method="POST" action="{{ route('update-avatar') }}" enctype="multipart/form-data">
                @csrf
                    <div uk-form-custom class="w-full py-3">
                        <label>Choose a avatar</label>
                        <div class="bg-gray-100 border-2 border-dashed flex flex-col h-32 items-center justify-center relative w-full rounded-lg dark:bg-gray-800 dark:border-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-12">
                                <path d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z" />
                                <path d="M9 13h2v5a1 1 0 11-2 0v-5z" />
                            </svg>
                        </div>
                        <input name="avatar" type="file">
                        @error('avatar')
                            <p class="class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="bg-gray-10 p-6 pt-0 flex justify-end space-x-3">
                        <button type="submit" class="button bg-blue-700">Upload avatar</button>
                    </div>
                </form>

                <form method="POST" action="{{ route('update-cover') }}" enctype="multipart/form-data">
                    @csrf
                        <div uk-form-custom class="w-full py-3">
                            <label>Choose a cover image</label>
                            <div class="bg-gray-100 border-2 border-dashed flex flex-col h-32 items-center justify-center relative w-full rounded-lg dark:bg-gray-800 dark:border-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-12">
                                    <path d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z" />
                                    <path d="M9 13h2v5a1 1 0 11-2 0v-5z" />
                                </svg>
                            </div>
                            <input name="header_bg" type="file">
                            @error('header_bg')
                                <p class="class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="bg-gray-10 p-6 pt-0 flex justify-end space-x-3">
                            <button type="submit" class="button bg-blue-700">Upload cover</button>
                        </div>
                    </form>
            </div>

        </div>

    </div>

</div>

@endsection