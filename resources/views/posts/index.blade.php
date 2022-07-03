@extends('layouts.app')

@section('content')
<div class="container m-auto">

    <h1 class="lg:text-2xl text-lg font-extrabold leading-none text-gray-900 tracking-tight mb-5"> Feed </h1>

    <div class="lg:flex justify-center lg:space-x-10 lg:space-y-0 space-y-5">

        <!-- left sidebar-->
        <div class="space-y-5 flex-shrink-0 lg:w-7/12">

            @if(count($posts) == 0) 
            <p>No posts found.</p>
            @endif
      
            @foreach($posts as $post)
              <x-post-card :post="$post" />
            @endforeach
            
            <!-- Load more-->
            <div class="flex justify-center mt-6" id="toggle" hidden>
                <a href="#"
                    class="bg-white dark:bg-gray-900 font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white">
                    Load more ..</a>
            </div>

        </div>

       @include('components.post-sidebar')

    </div>               

</div>
@endsection