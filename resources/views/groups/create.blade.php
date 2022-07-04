@extends('layouts.app')

@section('content')
<div class="mcontainer">

    <!--  breadcrumb -->
    <div class="breadcrumb-area py-0">
        <div class="breadcrumb">
            <ul class="m-0">
                <li>
                    <a href="index.html">Groups</a>
                </li>
                <li class="active">
                    <a href="#">Create New Group </a>
                </li>
            </ul>
        </div>
    </div>


    <!-- create page-->
    <div class="max-w-2xl m-auto shadow-md rounded-md bg-white lg:mt-20">  

        <!-- form header -->
        <div class="text-center border-b border-gray-100 py-6">
            <h3 class="font-bold text-xl"> Create New Group </h3>
        </div>

        <!-- form body -->
        <div class="p-10 space-y-7">

            <div class="line">
                <input class="line__input" id="" name="" type="text" onkeyup="this.setAttribute('value', this.value);" value="" autocomplete="off">
                <span for="username" class="line__placeholder"> Group Name </span>
            </div>

            <div>
                <label for="" class="font-semibold text-base"> Group Category </label>
                <select id="" name=""  class="shadow-none selectpicker with-border">
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
                <span for="username" class="line__placeholder"> Group description </span> 
            </div>

            <div class="px-2 space-y-2">
                <label for="" class="font-semibold text-base"> Choose Privacy </label> 
                <div> Anyone can see who's in the group and what they post. </div>
                <select id="" name=""  class="shadow-none selectpicker with-border">
                    <option data-icon="uil-bullseye"> Private </option>
                    <option data-icon="uil-chat-bubble-user">My Following</option>
                    <option data-icon="uil-layer-group-slash">Unlisted</option>
                    <option data-icon="uil-globe" selected>Puplic</option>
                </select>
            </div>
            
        </div>
        
        <!-- form footer -->
        <div class="flex justify-center border-gray-100 py-8">
            <button type="button" class="button lg:w-1/3">
                Create Now
            </button>
        </div>
        
    </div>


</div>
@endsection