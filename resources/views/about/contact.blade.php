@extends('layouts.anon')

@section('content')
<div class="bg-gradient-to-tr flex from-blue-400 h-52 items-center justify-center lg:h-80 pb-10 relative to-blue-300 via-blue-400 w-full">

    <div class="text-center max-w-xl mx-auto z-10 relative px-5">
        <div class="lg:text-4xl text-2xl text-white font-semibold mb-3"> Leave a message </div>
        <div class="text-white text-lg font-medium text-opacity-90"> Contact us if you have any questions about our company   We will try to provide an answer </div>
    </div>

</div>
<div class="mcontainer">

    <div class="-mt-16 bg-white max-w-2xl mx-auto p-10 relative rounded-md shadow">

        <div class="grid md:grid-cols-2 md:gap-y-7 md:gap-x-6 gap-6">
            <input type="text" placeholder="Your Name" class="with-border">
            <input type="text" placeholder="Email address" class="with-border">
            <input type="text" placeholder="Company Name" class="with-border">
            <input type="text" placeholder="Contact Number" class="with-border">
            <textarea placeholder="How can we help?" rows="5" class="with-border md:col-span-2 p-5 px-7 resize-none h-72"></textarea>
            <div class="md:col-span-2 md:flex items-center justify-between">
                <div>
                    <div class="checkbox">
                        <input type="checkbox" id="chekcbox2">
                        <label for="chekcbox2">
                            <span class="checkbox-icon"></span> <span class="font-medium text-gray-400">I agree to the Terms &amp; Conditions</span> 
                        </label>
                    </div>
                </div>
                <button type="button" class="button bg-blue-700 w-full md:w-auto md:mt-0 mt-4"> Submit </button> 
            </div>
        </div>
        
    </div>

</div>
@endsection