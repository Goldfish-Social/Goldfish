@extends('layouts.app')

@section('content')
    <div class="mb-6">
        <h2 class="text-2xl font-semibold">Email settings</h2>
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
                    <h3 class="font-bold mb-2 text-xl">Update account email</h3>
                    <p class="">Make sure it's an email you own and can access.</p>
                </div>

                
                <form action="/" method="POST">
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
                    <p class="">Change your email</p>
                    <div class="line">
                        <input name="email" class="line__input @error('email') is-invalid @enderror" id="email" autocomplete="off" name="email" type="email" value="{{ Auth()->user()->email }}" onkeyup="this.setAttribute('value', this.value);" required>
                        <span for="email" class="line__placeholder">Email</span>
                    </div>
                    @error('email')
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