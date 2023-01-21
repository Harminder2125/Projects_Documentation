<div class="min-h-screen drop-shadow-2xl w-5/12  bg-gray-50 md:w-3/12 sm:w-4/12 lg:w-2/12">
    <div class="flex flex-col space-x-0  sm:ml-0 ">
        <div class="h-16 bg-fuchsia-900 mb-5 flex justify-center items-center">
            <h1 class="text-sm uppercase font-semibold text-white">NIC Project Manual</h1>
        </div>
        <div class="flex flex-col px-5 pb-5">
            <div class="rounded-full w-16 h-16 bg-pink-700 mb-1 flex  justify-center items-center">
                @php
                $words = explode(" ", Auth::user()->name);
                $acronym = "";
                foreach ($words as $w) {
                $acronym .= mb_substr($w, 0, 1);
                }
                @endphp
                <h1 class="font-bold text-gray-100 uppercase ">{{$acronym}}</h1>
            </div>
            <p class="">{{ Auth::user()->name }}</p>
            <p class="text-sm text-gray-400">{{ Auth::user()->designation }}</p>

        </div>
        <div class="flex flex-col px-3">
            <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-jet-nav-link>
            <x-jet-nav-link href="{{ route('users') }}" :active="request()->routeIs('users')">
                {{ __('Users') }}
            </x-jet-nav-link>
            <x-jet-nav-link href="{{ route('groups') }}" :active="request()->routeIs('groups')">
                {{ __('Groups/States') }}
            </x-jet-nav-link>
            <x-jet-nav-link href="{{ route('assign_roles') }}" :active="request()->routeIs('assign_roles')">


                {{ __('Assign Roles') }}
            </x-jet-nav-link>

            <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard1')">
                {{ __('Contact') }}
            </x-jet-nav-link>
            <x-jet-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                {{ __('Profile') }}
            </x-jet-nav-link>
        </div>


    </div>
</div>
