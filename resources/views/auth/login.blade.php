@extends('layouts.anon')

@section('content')
                <div class="lg:p-12 max-w-md max-w-xl lg:my-0 my-12 mx-auto p-6 space-y-">
                    <h1 class="lg:text-3xl text-xl font-semibold  mb-6"> Log in</h1>
                    <p class="mb-2 text-black text-lg"> Email or Username</p>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                                <input id="email" type="email" placeholder="Email" class="bg-gray-200 mb-2 shadow-none dark:bg-gray-800" style="border: 1px solid #d3d5d8 !important; @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
   
                                <input id="password" type="password" placeholder="Password" class="bg-gray-200 mb-2 shadow-none dark:bg-gray-800" style="border: 1px solid #d3d5d8 !important; @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <div class="flex justify-between my-4">
                                    <div class="checkbox">
                                        <div class="checkbox">
                                            <input type="checkbox" name="terms" id="chekcbox1" checked {{ old('remember') ? 'checked' : '' }}>
                                            <label for="chekcbox1"><span class="checkbox-icon"></span>{{ __('Remember Me') }}</label>
                                        </div>

                                    </div>
                                    @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                                    @endif
                                </div>


                                <button type="submit" class="bg-gradient-to-br from-pink-500 py-3 rounded-md text-white text-xl to-red-400 w-full">
                                    {{ __('Login') }}
                                </button>
                                <div class="text-center mt-5 space-x-2">
                                    <p class="text-base"> Not registered? <a href="{{ route('register')}}" class=""> Create a account </a></p>
                                </div>
                    </form>
                </div>
@endsection
