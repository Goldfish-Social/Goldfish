@extends('layouts.app')

@section('content')
<div class="main_content">
    <div class="mcontainer">

        <!--  breadcrumb -->
        <div class="breadcrumb-area py-0">
            <div class="breadcrumb">
                <ul class="m-0">
                    <li>
                        <a href="index.html">Pages</a>
                    </li>
                    <li class="active">
                        <a href="#">Create New Page </a>
                    </li>
                </ul>
            </div>
        </div>


        <!-- create page-->
        <div class="max-w-2xl m-auto shadow-md rounded-md bg-white lg:mt-20">  

            <!-- form header -->
            <div class="text-center border-b border-gray-100 py-6">
                <h3 class="font-bold text-xl"> Create New Page </h3>
            </div>

            <!-- form body -->
            <div class="p-10 space-y-7">

                <div class="line">
                    <input class="line__input" id="" name="" type="text" onkeyup="this.setAttribute('value', this.value);" value="" autocomplete="off">
                    <span for="username" class="line__placeholder"> Page Name </span>
                </div>
                <div class="flex items-center">
                    <div class="-mr-1 bg-gray-100 border px-3 py-3 rounded-l-md">  https://mydomain.com/   </div>
                    <input type="text" class="with-border" placeholder="">
                </div>
                <div>
                    <label for=""> Page Category </label>
                    <select id="" name=""  class="shadow-none selectpicker with-border ">
                        <option value="1">Technology</option>
                        <option value="2">Cars and Vehicles</option>
                        <option value="3">Comedy</option>
                        <option value="4">Economics and Trade</option>
                        <option value="5">Education</option>
                        <option value="6">Entertainment</option>
                        <option value="7">Movies & Animation</option>
                        <option value="8">Gaming</option>
                        <option value="9">History and Facts</option>
                        <option value="10">Live Style</option> 
                        <option value="0">Other</option>
                   </select>
                 </div>
                <div class="line h-32"> 
                    <textarea class="line__input h-32"  id="" name="" type="text" onkeyup="this.setAttribute('value', this.value);" value="" autocomplete="off"></textarea>
                    <span for="username" class="line__placeholder"> Page description </span> 
                </div>
                
            </div>

            <!-- form footer -->
            <div class="border-t flex justify-between lg:space-x-10 p-7 bg-gray-50 rounded-b-md">
                <p class="text-sm leading-6"> You can add images, contact info and other details after you create the Page. </p>
                <button type="button" class="button lg:w-1/2">
                    Create Now
                </button>
            </div> 
            
        </div>


    </div>
</div>
@endsection