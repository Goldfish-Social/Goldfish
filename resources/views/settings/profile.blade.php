@extends('layouts.app')

@section('content')
<div class="mb-6">
    <h2 class="text-2xl font-semibold"> Edit profile </h2>
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
                <h3 class="font-bold mb-2 text-xl">Splended!</h3>
                <p class=""> This information will be dispalyed publicly so be carful what you share. </p>
                
            </div>
            
            <form action="{{ route('update-profile') }}" method="POST">
            @csrf
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
                <div>
                    <label>Display name</label>
                    <input name="name" type="text" class="with-border" placeholder="" value="{{ Auth()->user()->name }}">
                </div>
                @error('name')
                    <p class="class="text-red-500">{{ $message }}</p>
                @enderror
                <div class="col-span-2">
                    <label for="about">Bio (max 150 characters)</label>
                    <textarea id="about" name="bio" rows="3"  class="shadow-none bg-gray-100 with-border" placeholder="">{{Auth()->user()->bio}}</textarea>
                @error('bio')
                    <p class="class="text-red-500">{{ $message }}</p>
                @enderror
                </div>
                <div>
                    <label>Website</label>
                    <input name="website" type="text" class="with-border" placeholder="https://" value="{{ Auth()->user()->website }}">
                </div>
                @error('website')
                    <p class="class="text-red-500">{{ $message }}</p>
                @enderror
            
            </div>

                <div class="bg-gray-10 p-6 pt-0 flex justify-end space-x-3">
                    <button type="submit" class="button bg-blue-700"> Save </button>
                </div>
            </form>

        </div>

    </div>

</div>

@endsection