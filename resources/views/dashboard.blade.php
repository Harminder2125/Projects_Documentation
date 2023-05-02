<x-dashboard-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <!-- <x-jet-welcome /> -->
        @if(Auth::user()->role_id==3)
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="flex flex-col justify-ceter items-center p-20">
                    <img src="./assets/images/permission.jpg" class="w-60" />
                    <h1 class="font-bold text-pink-800 uppercase">Test No role/permissions assigned !</h1>
                    <p class="py-2"> You don't have any role/permission assigned to you. Contact your group/state admin to assign you some role.</p>
                </div>
            </div>
        </div>

        @endif

        @if(Auth::user()->role_id ==1)

        <!-- SUPER ADMIN -->
        <!-- Dashboard top boxes -->
        <div class="w-full  px-10 xs:px-2">
            <div class="gap-x-10 flex flex-row flex-wrap justify-ceter items-center p-3">

                <div class="pb-1 mb-5 flex-1 bg-gradient-to-l from-pink-500/80 via-pink-700/80 to-pink-900/80 min-h-24 rounded-t-xl">

                    <div class="p-3 h-full bg-white rounded-t-lg flex flex-row justify-between">

                        <div class="flex-1">
                            <h1 class="font-semibold">test States/Groups</h1>
                            <p class="text-sm text-gray-500">States or groups who are registered with us.</p>
                        </div>


                        <div class="flex-1 flex justify-end">

                            <div class="animate-bounce bg-pink-800 rounded-full p-2 w-12 h-12 flex justify-center items-center">
                                <h1 class="text-sm text-white">25</h1>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="pb-1 mb-5 text-gray-800  flex-1 bg-gradient-to-l from-orange-500/80 via-red-700/80 to-red-900/80 min-h-24 rounded-t-xl">


                    <div class="p-3 h-full bg-white rounded-t-lg flex flex-row justify-between">

                        <div class="flex-1">
                            <h1 class="font-semibold">Registered Users</h1>
                            <p class="text-sm text-gray-500">Total users registered with us.</p>
                        </div>

                        <div class="flex-1 flex justify-end">

                            <div class="animate-bounce bg-orange-700 rounded-full p-2 w-12 h-12 flex justify-center items-center">
                                <h1 class="text-sm text-white">103</h1>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="pb-1 mb-5  flex-1 bg-gradient-to-l from-fuchsia-500/80 via-fuchsia-700/80 to-fuchsia-900/80 min-h-24 rounded-t-xl">


                    <div class="p-3 h-full bg-white rounded-t-lg flex flex-row justify-between">

                        <div class="flex-1">
                            <h1 class="font-semibold">Added Projects</h1>
                            <p class="text-sm text-gray-500">Total no. of projects added in this portal.</p>
                        </div>

                        <div class="flex-1 flex justify-end">

                            <div class="animate-bounce bg-fuchsia-800 rounded-full p-2 w-12 h-12 flex justify-center items-center">
                                <h1 class="text-sm text-white">133</h1>
                            </div>
                        </div>


                    </div>

                </div>
                <div class="  pb-1 mb-5 flex-1 bg-gradient-to-l from-indigo-500/80 via-indigo-700/80 to-indigo-900/80 min-h-24 rounded-t-xl ">


                    <div class="p-3 h-full bg-white rounded-t-lg flex flex-row justify-between">
                        <div class="flex-1">
                            <h1 class="font-semibold">Uploaded Manuals</h1>
                            <p class="text-sm text-gray-500">No. of project manuals added.</p>
                        </div>

                        <div class="flex-1 flex justify-end">

                            <div class="animate-bounce bg-indigo-800 rounded-full p-2 w-12 h-12 flex justify-center items-center">
                                <h1 class="text-sm text-white">1056</h1>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
        <!-- Dashboard Top Boxes end -->
        <div class="w-full px-12 xs:px-2 flex gap-x-10  ">

            <div class="bg-white flex-1  flex flex-row flex-wrap justify-ceter items-center p-2 rounded">
                <h1 class="font-semibold py-3 border-b-2 border-gray-200 w-full">Registred States/Groups</h1>
            </div>
            <div class=" bg-white flex-1 flex flex-row flex-wrap justify-ceter items-center p-2 rounded">
                <h1 class="font-semibold py-3 border-b-2 border-gray-200 w-full">Registred Users</h1>

            </div>



        </div>
        @endif

        @if(Auth::user()->role_id==2)
        <!--  IF USER IS ADMIN-->
        <div class="w-full  px-10 xs:px-2">


            <div class="gap-x-10 flex flex-row flex-wrap justify-ceter items-center p-3">

                <div class="pb-1 mb-5 flex-1 bg-gradient-to-l from-pink-500/80 via-pink-700/80 to-pink-900/80 h-24 rounded-t-xl">

                    <div class="p-3 h-full bg-white rounded-t-lg flex flex-row justify-between">

                        <h1>Project Heads</h1>
                        <div class=" animate-bounce bg-pink-900 rounded-full p-2 w-12 h-12 flex justify-center items-center">

                            <h1 class="text-sm text-white">25</h1>

                        </div>

                    </div>
                </div>
                <div class="pb-1 mb-5 text-gray-800  flex-1 bg-gradient-to-l from-orange-500/80 via-red-700/80 to-red-900/80 h-24 rounded-t-xl">


                    <div class="p-3 h-full bg-white rounded-t-lg flex flex-row justify-between">

                        <h1>Registered Users</h1>
                        <div class="animate-bounce bg-orange-700 rounded-full p-2 w-12 h-12 flex justify-center items-center">

                            <h1 class="text-sm text-white">103</h1>

                        </div>

                    </div>
                </div>
                <div class="pb-1 mb-5  flex-1 bg-gradient-to-l from-fuchsia-500/80 via-fuchsia-700/80 to-fuchsia-900/80 h-24 rounded-t-xl">


                    <div class="p-3 h-full bg-white rounded-t-lg flex flex-row justify-between">

                        <h1>Added Projects</h1>
                        <div class="animate-bounce bg-fuchsia-900 rounded-full p-2 w-12 h-12 flex justify-center items-center">
                            <h1 class="text-sm text-white">1053</h1>

                        </div>

                    </div>

                </div>
                <div class="  pb-1 mb-5 flex-1 bg-gradient-to-l from-indigo-500/80 via-indigo-700/80 to-indigo-900/80 h-24 rounded-t-xl ">


                    <div class="p-3 h-full bg-white rounded-t-lg flex flex-row justify-between">
                        <h1 class="text-sm font-inter font-bold text-gray-600">Uploaded Manuals</h1>
                        <div class="animate-bounce bg-indigo-900 rounded-full p-2 w-12 h-12 flex justify-center items-center">
                            <h1 class="text-sm text-white">4556</h1>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        @endif






       


    </div>
</x-dashboard-layout>
