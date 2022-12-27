<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- <x-jet-welcome /> -->
                <div class="flex flex-col justify-ceter items-center p-20">
                    <h1 class="font-bold text-pink-800">Welcome to NIC PROJECTS MANUAL</h1>
                    <p class="py-2"> You don't have any permission assigned to you. Ask your group/state admin to assign you some role.
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
