@extends('layouts.anon')

@section('content')
<div class="lg:p-12 max-w-md max-w-xl lg:my-0 my-12 mx-auto p-6 space-y-">
    <h1 class="lg:text-3xl text-xl font-semibold mb-6"> Sign in</h1>
    <p class="mb-2 text-black text-lg"> Register to manage your account </p>
        <form method="POST" action="{{ route('register') }}">
        @csrf
            <div class="flex lg:flex-row flex-col lg:space-x-2">
                <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" class="bg-gray-200 mb-2 shadow-none  dark:bg-gray-800 @error('name') is-invalid @enderror" style="border: 1px solid #d3d5d8 !important;" required>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="text" name="username" placeholder="Username" value="{{ old('username') }}" class="bg-gray-200 mb-2 shadow-none  dark:bg-gray-800 @error('username') is-invalid @enderror" style="border: 1px solid #d3d5d8 !important;" required>
                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <input type="text" name="email" placeholder="Email" class="bg-gray-200 mb-2 shadow-none  dark:bg-gray-800  @error('email') is-invalid @enderror" style="border: 1px solid #d3d5d8 !important;" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <input type="password" name="password" placeholder="Password" class="bg-gray-200 mb-2 shadow-none  dark:bg-gray-800 @error('password') is-invalid @enderror" style="border: 1px solid #d3d5d8 !important;" required>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <input type="password" name="password_confirmation" placeholder="Confirm Password" class="bg-gray-200 mb-2 shadow-none  dark:bg-gray-800" style="border: 1px solid #d3d5d8 !important;" required>
            <div class="flex justify-start my-4 space-x-1">
                <div class="checkbox">
                    <input type="checkbox" id="chekcbox1" checked name="terms">
                    <label for="chekcbox1"><span class="checkbox-icon"></span> I Agree</label>
                </div>
                <a href="/about/terms"> Terms and Conditions</a>
            </div>
            <button type="submit" class="bg-gradient-to-br from-pink-500 py-3 rounded-md text-white text-xl to-red-400 w-full">{{ __('Register') }}</button>
            <div class="text-center mt-5 space-x-2">
                <p class="text-base"> Do you have an account? <a href="{{ route('login') }}"> Login </a></p>
            </div>
        </form>
    </div>           
@endsection
