@extends('layouts.app')

@section('content')

    <div class="mb-6">
        <h2 class="text-2xl font-semibold"> Settings </h2>
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
                    <h3 class="font-bold mb-2 text-xl">Profile</h3>
                    <p class=""> This information will be dispalyed publicly so be carful what you share. </p>
                </div>

                <!-- form body -->
                <div class="lg:py-8 lg:px-20 flex-1 space-y-4 p-6">

                    <div class="line">
                        <input class="line__input" id="password" autocomplete="off" name="password" type="text" onkeyup="this.setAttribute('value', this.value);" value="">
                        <span for="username" class="line__placeholder"> First Name   </span>
                    </div>
                    <div class="line">
                        <input class="line__input" id="password" autocomplete="off" name="password" type="text" onkeyup="this.setAttribute('value', this.value);" value="">
                        <span for="username" class="line__placeholder"> Last Name </span>
                    </div>
                    <div class="line">
                        <input class="line__input" id="password" autocomplete="off" name="password" type="text" onkeyup="this.setAttribute('value', this.value);" value="">
                        <span for="username" class="line__placeholder">Email </span>
                    </div>
                    <div class="col-span-2" hidden>
                        <label for="about">About me</label>
                        <textarea class="shadow-none with-border"></textarea>
                    </div>
                    <div class="line h-32">
                        <textarea class="line__input h-32"  autocomplete="off"  type="text" onkeyup="this.setAttribute('value', this.value);" value=""></textarea>
                        <span for="username" class="line__placeholder">About me </span>
                    </div> 
                    <div class="line">
                        <input class="line__input" id="password" autocomplete="off" name="password" type="text" onkeyup="this.setAttribute('value', this.value);" value="">
                        <span for="username" class="line__placeholder">Location </span>
                    </div>
                    <div class="line">
                        <input class="line__input" id="password" autocomplete="off" name="password" type="text" onkeyup="this.setAttribute('value', this.value);" value="">
                        <span for="username" class="line__placeholder">Working at </span>
                    </div>
                    <div>
                       <label for=""> Relationship </label>
                       <select id="relationship" name="relationship"  class="shadow-none selectpicker with-border ">
                        <option value="0">None</option>
                        <option value="1">Single</option>
                        <option value="2">In a relationship</option>
                        <option value="3">Married</option>
                        <option value="4">Engaged</option>
                      </select>
                    </div>


                </div>

                <div class="bg-gray-10 p-6 pt-0 flex justify-end space-x-3">
                    <button class="p-2 px-4 rounded bg-gray-50 text-red-500"> Cancel </button>
                    <button type="button" class="button bg-blue-700"> Save </button>
                </div>


            </div>

            <div class="bg-white rounded-md lg:shadow-md shadow" hidden>

                <div class="grid grid-cols-2 gap-3 lg:p-6 p-4">
                    <div>
                        <label for=""> First name</label>
                        <input type="text" placeholder="" class="shadow-none with-border">
                    </div>
                    <div>
                        <label for=""> Last name</label>
                        <input type="text" placeholder="" class="shadow-none with-border">
                     </div>
                     <div class="col-span-2">
                         <label for=""> Email</label>
                         <input type="text" placeholder="" class="shadow-none with-border">
                     </div>
                     <div class="col-span-2">
                         <label for="about">About me</label>
                         <textarea id="about" name="about" rows="3"  class="shadow-none bg-gray-100 with-border"></textarea>
                     </div>
                     <div class="col-span-2">
                         <label for=""> Location</label>
                         <input type="text" placeholder="" class="shadow-none with-border">
                     </div>
                     <div>
                        <label for=""> Working at</label>
                        <input type="text" placeholder="" class="shadow-none with-border">
                     </div>
                     <div>
                        <label for=""> Relationship </label>
                        <select id="relationship" name="relationship"  class="shadow-none selectpicker with-border ">
                         <option value="0">None</option>
                         <option value="1">Single</option>
                         <option value="2">In a relationship</option>
                         <option value="3">Married</option>
                         <option value="4">Engaged</option>
                       </select>
                     </div>
                </div>

                <div class="bg-gray-10 p-6 pt-0 flex justify-end space-x-3">
                    <button class="p-2 px-4 rounded bg-gray-50 text-red-500"> Cancel </button>
                    <button type="button" class="button bg-blue-700"> Save </button>
                </div>

            </div>

            <br>

            <div class="bg-white rounded-md lg:shadow-md shadow" hidden>
                 <div class="space-y-3">
                    <div class="flex justify-between items-center">
                        <div>
                            <h4> Who can follow me ?</h4>
                            <div> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, </div>
                        </div>
                        <div class="switches-list -mt-8 is-large">
                            <div class="switch-container">
                                <label class="switch"><input type="checkbox" checked><span class="switch-button"></span> </label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="flex justify-between items-center">
                        <div>
                            <h4> Show my activities  </h4>
                            <div> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, </div>
                        </div>
                        <div class="switches-list -mt-8 is-large">
                            <div class="switch-container">
                                <label class="switch"><input type="checkbox"><span class="switch-button"></span> </label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="flex justify-between items-center">
                        <div>
                            <h4> Search engines </h4>
                            <div> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, </div>
                        </div>
                        <div class="switches-list -mt-8 is-large">
                            <div class="switch-container">
                                <label class="switch"><input type="checkbox" checked><span class="switch-button"></span> </label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="flex justify-between items-center">
                        <div>
                            <h4> Allow Commenting </h4>
                            <div> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, </div>
                        </div>
                        <div class="switches-list -mt-8 is-large">
                            <div class="switch-container">
                                <label class="switch"><input type="checkbox"><span class="switch-button"></span> </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection