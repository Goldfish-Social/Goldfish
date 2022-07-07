@extends('layouts.anon')

@section('content')
<div class="w-full lg:h-80 h-52 pb-10 bg-cover flex justify-center items-center relative" data-src="{{ asset('assets/images/cover.jpg') }}" uk-img>

    <div class="text-center max-w-xl mx-auto z-10 relative">
        <div class="lg:text-4xl text-2xl text text-white font-semibold mb-3"> Goldfish</div>
        <div class="text-white text-lg font-medium text-opacity-90"> A brand new free open source social network</div>
    </div>

    <div class="absolute w-full h-full inset-0 bg-gray-600 bg-opacity-20"> </div>

</div> 
<div class="mcontainer">

    <div class="-mt-16 bg-white max-w-3xl mx-auto p-10 relative rounded-md shadow">

        <div class="md:space-y-6 space-y-5 text-gray-400 md:text-base">
            
            <div class="font-semibold md:text-2xl text-lg text-gray-700">Goals</div>
            <div class="md:leading-8">Our goal is to build a free open source social platform for sharing shorts(videos).</div>
            
            <div class="font-semibold md:text-xl text-lg text-gray-700"> Early alpha</div>
            <div class="md:leading-8">We are still in very early development and this is our official test server.</div>
            <div class="md:leading-8">Until the first release data can be wiped at any time.</div>
            <div class="md:leading-8">If you find bugs please report them to info [at] goldfish [dot] social.</div>
             <br />
             <br />
        </div>
        
    </div>

</div>
@endsection